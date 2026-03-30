<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Brand;

use DB;
use Illuminate\Http\Request;

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
        return view('admin.product.product-add',compact('brands'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'Please Enter the product name.',
        ]);
        
       

        $post = new Product;
        $post->brand_id = $request->get('brand_id');
        $post->name = $request->get('name');
        $post->description = $request->get('description');
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        
 
       
        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('Product/front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        }  
        
        $post->save();
         return redirect()->route('product.index')->with('success','Product created successfully');
        
    }

    public function edit($id)
    {
        $data = Product::find($id);
        $brands = Brand::orderBy('title','ASC')->get();
        return view('admin.product.product-edit', compact('data','brands'));
    }

    public function update(Request $request, $id)
    {
        $post = Product::find($id);
        
        
        $post->brand_id = $request->get('brand_id');
        $post->name = $request->get('name');
        $post->description = $request->get('description');
        $post->short_description = $request->get('short_description');
        $post->url = $request->get('url');
        $post->meta_title = $request->get('meta_title');
        $post->meta_description = $request->get('meta_description');
        
       
        if($request->hasFile('front_image')) {
            $file = $request->file('front_image');
            $filename = $file->getClientOriginalName();
            $path = public_path('Product/front_image');
            $file->move($path, $filename);
            $post->front_image = $filename;
        }  
        
        $post->save();
        return redirect()->route('product.index')->with('success','Product updated successfully');
        
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