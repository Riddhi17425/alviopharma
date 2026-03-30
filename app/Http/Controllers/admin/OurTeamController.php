<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Models\OurTeam;

class OurTeamController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $ourteam = OurTeam::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title ', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.ourteam.ourteam-list', compact('ourteam', 'search'));
    }

    public function create(){
        return view('admin.ourteam.ourteam-add');
    }

    public function store(Request $request)
    {   
         
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
                $file->move(public_path('ourteamimage'), $fileName);
                $ourteam = [ 
                    'description' => $request->description, 
                    'title' => $request->title, 
                    'image'=>$fileName,
                ];
                OurTeam::create($ourteam);
            }
        }

        return redirect()->route('ourteam.index')
                        ->with('success','ourteam created successfully');
    }

    public function edit($id)
    {
        $ourteam = OurTeam::find($id);
        return view('admin.ourteam.ourteam-edit',compact('ourteam'));
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
            $file->move(public_path('ourteamimage'), $fileName);
            $ourteam = OurTeam::find($id);
            $ourteam->description = $request->description;
            $ourteam->title = $request->title;
            $ourteam->image = $fileName;
            $ourteam->save();
        }else{
            $ourteam = OurTeam::find($id);
            $ourteam->description = $request->description;
            $ourteam->title = $request->title;
            $ourteam->save();
        }

        return redirect()->route('ourteam.index')->with('success','ourteam updated successfully');
    }

    public function destroy($id)
    {
        $ourteam = OurTeam::findOrFail($id);
        $ourteam->delete(); 
        return redirect()->route('ourteam.index')->with('success','Industry deleted successfully');
    }
}