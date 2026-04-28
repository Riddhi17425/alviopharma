<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Divisions;
use App\Models\KeyIngredient;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ProductController extends Controller
{ 
    public function index(Request $request)
    {
        $search = $request->get('search');

        $data = Product::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);
        return view('admin.product.product-list', compact('data','search'));
    }

    public function create()
    {
        $brands = Brand::orderBy('title','ASC')->get();
        $category = Category::where('status' , 'Active')->orderBy('created_at','Desc')->get();
        $divisions = Divisions::where('status' , 'Active')->orderBy('created_at','Desc')->get();
        $key_ingredient = KeyIngredient::orderBy('title','ASC')->get();
        return view('admin.product.product-add',compact('brands' , 'category' , 'divisions' , 'key_ingredient'));
    }

    public function store(Request $request)
    {
        // ✅ Generate slug
        $request->merge([
            'url' => Str::slug($request->input('url') ?: $request->input('name'))
        ]);

        // ✅ VALIDATION (WITH SOFT DELETE CHECK)
        $request->validate([
            'name' => 'required|string|max:255',

            // Check category exists (not deleted)
            'category' => [
                'required',
                Rule::exists('category', 'url')->where(function ($query) {
                    $query->whereNull('deleted_at');
                }),
            ],

            // Check division exists (not deleted)
            'divisions' => [
                'required',
                Rule::exists('divisions', 'url')->where(function ($query) {
                    $query->whereNull('deleted_at');
                }),
            ],

            'key_ingredients' => 'required|array',
            'key_ingredients.*' => [
                'integer',
                Rule::exists('key_ingredient', 'id')->where(function ($query) {
                    $query->whereNull('deleted_at');
                }),
            ],

            'brand_id' => 'nullable|exists:brand,id',

            'status' => 'required|in:Active,In-Active',

            // Unique slug (ignore soft deleted)
            'url' => [
                'required',
                'string',
                'max:255',
                Rule::unique('product', 'url')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],

            // Images
            'front_image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'detail_images' => 'required',
            'detail_images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',

            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',
        ], [
            'category.exists' => 'Selected category is invalid.',
            'divisions.exists' => 'Selected division is invalid.',
            'url.unique' => 'This URL already exists.',
        ]);

        // ✅ CREATE PRODUCT
        $product = new Product();
        $product->name = $request->name;
        $product->url = $request->url;
        $product->brand_id = $request->brand_id;
        $product->category_url = $request->category;     // storing URL
        $product->divisions_url = $request->divisions;   // storing URL
        $product->status = $request->status;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->key_ingredients = json_encode($request->key_ingredients);
        $product->top_sellers = $request->top_sellers;

        // ✅ FRONT IMAGE
        if ($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = time() . '_front.' . $file->getClientOriginalExtension();
            $file->move(public_path('product/front_image/'), $filename);
            $product->front_image = $filename;
        }

        // ✅ DETAIL IMAGES (MULTIPLE)
        if ($request->hasFile('detail_images')) {
            $images = [];

            foreach ($request->file('detail_images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('product/details_image/'), $filename);
                $images[] = $filename;
            }

            $product->detail_images = json_encode($images);
        }

        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully');
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $brands = Brand::orderBy('title','ASC')->get();
        $category = Category::where('status' , 'Active')->orderBy('created_at','Desc')->get();
        $divisions = Divisions::where('status' , 'Active')->orderBy('created_at','Desc')->get();
        $key_ingredient = KeyIngredient::orderBy('title','ASC')->get();
        return view('admin.product.product-edit', compact('data','brands' , 'category' , 'divisions' , 'key_ingredient'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // ✅ Generate slug
        $request->merge([
            'url' => Str::slug($request->input('url') ?: $request->input('name'))
        ]);

        // ✅ VALIDATION
        $request->validate([
            'name' => 'required|string|max:255',

            // category exists (not soft deleted)
            'category' => [
                'required',
                Rule::exists('category', 'url')->where(fn($q) => $q->whereNull('deleted_at'))
            ],

            // division exists (not soft deleted)
            'divisions' => [
                'required',
                Rule::exists('divisions', 'url')->where(fn($q) => $q->whereNull('deleted_at'))
            ],

            'key_ingredients' => 'required|array',
            'key_ingredients.*' => [
                'integer',
                Rule::exists('key_ingredient', 'id')->where(function ($query) {
                    $query->whereNull('deleted_at');
                }),
            ],
            
            'brand_id' => 'nullable|exists:brand,id',

            'status' => 'required|in:Active,In-Active',

            // unique slug (ignore current + soft delete)
            'url' => [
                'required',
                'string',
                'max:255',
                Rule::unique('product', 'url')
                    ->ignore($product->id)
                    ->where(fn($q) => $q->whereNull('deleted_at'))
            ],

            // images optional in update
            'front_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'detail_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

            'meta_title' => 'required|string|max:255',
            'meta_description' => 'required|string',

        ]);

        // ✅ BASIC DATA
        $product->name = $request->name;
        $product->url = $request->url;
        $product->brand_id = $request->brand_id;
        $product->category_url = $request->category;
        $product->divisions_url = $request->divisions;
        $product->status = $request->status;
        $product->short_description = $request->short_description;
        $product->description = $request->description;
        $product->meta_title = $request->meta_title;
        $product->meta_description = $request->meta_description;
        $product->key_ingredients = json_encode($request->key_ingredients);
        $product->top_sellers = $request->top_sellers;

        // =========================
        // ✅ FRONT IMAGE UPDATE
        // =========================
        if ($request->hasFile('front_image')) {

            // delete old image
            if ($product->front_image && file_exists(public_path('product_front_image/' . $product->front_image))) {
                unlink(public_path('product/front_image/' . $product->front_image));
            }

            $file = $request->file('front_image');
            $filename = time() . '_front.' . $file->getClientOriginalExtension();
            $file->move(public_path('product/front_image/'), $filename);

            $product->front_image = $filename;
        }

        // =========================
        // ✅ DETAIL IMAGES UPDATE
        // =========================
        if ($request->hasFile('detail_images')) {

            // delete old images
            if ($product->detail_images) {
                $oldImages = json_decode($product->detail_images, true);
                if (is_array($oldImages)) {
                    foreach ($oldImages as $img) {
                        $path = public_path('product/details_image/' . $img);
                        if (file_exists($path)) {
                            unlink($path);
                        }
                    }
                }
            }

            $images = [];

            foreach ($request->file('detail_images') as $file) {
                $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('product/details_image/'), $filename);
                $images[] = $filename;
            }

            $product->detail_images = json_encode($images);
        }

        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully');
    }

    public function destroy($id)
    {
        $data = Product::find($id);
        if ($data) {
        $data->delete();
        return redirect()->back()->with('success', 'Your Product Has Been Deleted Successfully!');
        }
    
        return redirect()->back()->with('error', 'Product not found!');
    }
}