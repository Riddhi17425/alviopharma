<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\MenuBanner;

class MenuBannerController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $menubanner = MenuBanner::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.menubanner.menubanner-list', compact('menubanner', 'search'));
    }

    public function create(){
        return view('admin.menubanner.menubanner-add');
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
                $file->move(public_path('menubannerimage'), $fileName);
                $menubanner = [ 
                    'description' => $request->description, 
                    'title' => $request->title, 
                    'image'=>$fileName,
                    'url'=>$request->url,
                ];
                MenuBanner::create($menubanner);
            }
        }
        
        return redirect()->route('menubanner.index')
                        ->with('success','menubanner created successfully');
    }

    public function edit($id){
        $menubanner = MenuBanner::find($id);
        return view('admin.menubanner.menubanner-edit',compact('menubanner'));
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
            $file->move(public_path('menubannerimage'), $fileName);
            $menubanner = MenuBanner::find($id);
            $menubanner->description = $request->description;
            $menubanner->title = $request->title;
            $menubanner->url = $request->url;
            $menubanner->image = $fileName;
            $menubanner->save();
        }else{
            $menubanner = MenuBanner::find($id);
            $menubanner->description = $request->description;
            $menubanner->title = $request->title;
            $menubanner->url = $request->url;
            $menubanner->save();
        }


        return redirect()->route('menubanner.index')->with('success','menubanner updated successfully');
    }

    public function destroy($id)
    {
        $menubanner = MenuBanner::findOrFail($id);
        $menubanner->delete(); 
        return redirect()->route('menubanner.index')->with('success','Industry deleted successfully');
    }
}