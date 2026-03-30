<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\Milestone;

class MilestoneController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $milestone = Milestone::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.milestone.milestone-list', compact('milestone', 'search'));
    }

    public function create(){
        return view('admin.milestone.milestone-add');
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
         $milestone = [
                    'title' => $request->title,
                    'year' => $request->year, 
                    'short_description' => $request->short_description, 
                    'description' => $request->description, 
                    
                ];
                Milestone::create($milestone);
        return redirect()->route('milestone.index')
                        ->with('success','Milestone created successfully');
    }

    public function edit($id){
        $milestone = Milestone::find($id);
        return view('admin.milestone.milestone-edit',compact('milestone'));
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
        $milestone = Milestone::find($id);
            $milestone->title = $request->title;
            $milestone->year = $request->year;
            $milestone->short_description = $request->short_description;
            $milestone->description = $request->description;
            
            $milestone->save();


        return redirect()->route('milestone.index')->with('success','Milestone updated successfully');
    }

    public function destroy($id)
    {
        $milestone = Milestone::findOrFail($id);
        $milestone->delete(); 
        return redirect()->route('milestone.index')->with('success','Milestone deleted successfully');
    }
}