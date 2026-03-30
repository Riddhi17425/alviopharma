<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Clientel;

class ClientelController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $clientel = Clientel::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title ', 'LIKE', "%$search%");
            })
            ->orderBy('id','DESC')
            ->paginate(10);

        return view('admin.clientel.clientel-list', compact('clientel', 'search'));
    }

    public function create(){
        return view('admin.clientel.clientel-add');
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
                $file->move(public_path('clientelimage'), $fileName);
                $clientel = [ 
                    'title' => $request->title, 
                    'image'=>$fileName,
                ];
                Clientel::create($clientel);
            }
        }

        return redirect()->route('clientel.index')
                        ->with('success','Clientel created successfully');
    }

    public function edit($id)
    {
        $clientel= Clientel::find($id);
        return view('admin.clientel.clientel-edit',compact('clientel'));
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
            $file->move(public_path('clientelimage'), $fileName);
            $clientel= Clientel::find($id);
            $clientel->title = $request->title;
            $clientel->image = $fileName;
            $clientel->save();
        }else{
            $clientel = Clientel::find($id);
            $clientel->title = $request->title;
            $clientel->save();
        }

        return redirect()->route('clientel.index')->with('success','Clientel updated successfully');
    }

    public function destroy($id)
    {
        $clientel =Clientel::findOrFail($id);
        $clientel->delete(); 
        return redirect()->route('clientel.index')->with('success','Clientel deleted successfully');
    }
}
