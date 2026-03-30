<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $brand =Brand::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title ', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.brand.brand-list', compact('brand', 'search'));
    }

    public function create(){
        return view('admin.brand.brand-add');
    }

    public function store(Request $request)
    {   
         
        $validatedData = $request->validate(
            [
                
                'title' => 'required',
            ],
            [
               
                'title.required' => 'Please enter a Title.',
 
            ]
        );
        // dd($request->all());
        if(isset($request->image) && !empty($request->image)){
            if ($request->hasFile('image')) {
                $file = $request->file('image'); // Get the uploaded file
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('brandimage'), $fileName);
                $brand = [ 
                    'title' => $request->title, 
                    'image'=>$fileName,
                ];
                Brand::create($brand);
            }
        }

        return redirect()->route('brand.index')
                        ->with('success','Brand created successfully');
    }

    public function edit($id)
    {
        $brand= Brand::find($id);
        return view('admin.brand.brand-edit',compact('brand'));
    }

    public function update(Request $request, $id){
        
        $validatedData = $request->validate(
            [
               
                'title' => 'required',
              
            ],
            [
                
                'title.required' => 'Please enter a Title.',
               
            ]
        );
        // dd($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('brandimage'), $fileName);
            $brand= Brand::find($id);
            $brand->title = $request->title;
            $brand->image = $fileName;
            $brand->save();
        }else{
            $brand = Brand::find($id);
            $brand->title = $request->title;
            $brand->save();
        }

        return redirect()->route('brand.index')->with('success','Brand updated successfully');
    }

    public function destroy($id)
    {
        $brand = Brand::findOrFail($id);
        $brand->delete(); 
        return redirect()->route('brand.index')->with('success','Brand deleted successfully');
    }
}
