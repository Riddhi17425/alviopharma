<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\HomeMap;

class HomeMapController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $homemap = HomeMap::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.homemap.homemap-list', compact('homemap', 'search'));
    }

    public function create(){
        return view('admin.homemap.homemap-add');
    }

    public function store(Request $request){
        
        $validatedData = $request->validate(
            [
                'description' => 'required',
                'title' => 'required',
            ],
            [
                'description.required' => 'Please Select a Title.',
                'title.required' => 'Please enter a Title.',
 
            ]
        );
        // dd($request->all());
        if(isset($request->image) && !empty($request->image)){
            if ($request->hasFile('image')) {
                $file = $request->file('image'); // Get the uploaded file
                $fileName = $file->getClientOriginalName();
                $file->move(public_path('homemapimage'), $fileName);
                $homemap = [ 
                    'description' => $request->description, 
                    'title' => $request->title,
                    'cat_type' => $request->cat_type, 
                    'image'=>$fileName,
                ];
                HomeMap::create($homemap);
            }
        }
        
        return redirect()->route('homemap.index')
                        ->with('success','homemap created successfully');
    }

    public function edit($id){
        $homemap = HomeMap::find($id);
        return view('admin.homemap.homemap-edit',compact('homemap'));
    }

    public function update(Request $request, $id){
        
        $validatedData = $request->validate(
            [
                'description' => 'required',
                'title' => 'required',
              
            ],
            [
                'description.required' => 'Please Select a Title.',
                'title.required' => 'Please enter a Title.',
               
            ]
        );
        // dd($request->all());
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('homemapimage'), $fileName);
            $homemap = HomeMap::find($id);
            $homemap->description = $request->description;
            $homemap->title = $request->title;
            $homemap->cat_type = $request->cat_type;
            $homemap->image = $fileName;
            $homemap->save();
        }else{
            $homemap = HomeMap::find($id);
            $homemap->description = $request->description;
            $homemap->title = $request->title;
            $homemap->cat_type = $request->cat_type;
            $homemap->save();
        }


        return redirect()->route('homemap.index')->with('success','homemap updated successfully');
    }

    public function destroy($id)
    {
        $homemap = HomeMap::findOrFail($id);
        $homemap->delete(); 
        return redirect()->route('homemap.index')->with('success','Industry deleted successfully');
    }
}