<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\OurProduction;

class OurProductionController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $ourproduction = OurProduction::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.ourproduction.ourproduction-list', compact('ourproduction', 'search'));
    }

    public function create(){
        return view('admin.ourproduction.ourproduction-add');
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
                $file->move(public_path('ourproductionimage'), $fileName);
                $ourproduction = [ 
                    'description' => $request->description, 
                    'title' => $request->title, 
                    'cat_type' => $request->cat_type, 
                    'image'=>$fileName,
                ];
                OurProduction::create($ourproduction);
            }
        }
        
        return redirect()->route('ourproduction.index')
                        ->with('success','homemap created successfully');
    }

    public function edit($id){
        $ourproduction = OurProduction::find($id);
        return view('admin.ourproduction.ourproduction-edit',compact('ourproduction'));
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
            $file->move(public_path('ourproductionimage'), $fileName);
            $ourproduction = OurProduction::find($id);
            $ourproduction->description = $request->description;
            $ourproduction->cat_type = $request->cat_type;
            $ourproduction->title = $request->title;
            $ourproduction->image = $fileName;
            $ourproduction->save();
        }else{
            $ourproduction = OurProduction::find($id);
            $ourproduction->description = $request->description;
            $ourproduction->cat_type = $request->cat_type;
            $ourproduction->title = $request->title;
            $ourproduction->save();
        }
        return redirect()->route('ourproduction.index')->with('success','homemap updated successfully');
    }

    public function destroy($id)
    {
        $ourproduction = OurProduction::findOrFail($id);
        $ourproduction->delete(); 
        return redirect()->route('ourproduction.index')->with('success','Industry deleted successfully');
    }
}