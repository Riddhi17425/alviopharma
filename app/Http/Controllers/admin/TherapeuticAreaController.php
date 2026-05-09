<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\TherapeuticArea;
use Illuminate\Http\Request;

class TherapeuticAreaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $data = TherapeuticArea::with('category')
            ->whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where(function ($innerQuery) use ($search) {
                    $innerQuery->where('sub_title', 'LIKE', "%$search%")
                        ->orWhereHas('category', function ($categoryQuery) use ($search) {
                            $categoryQuery->where('name', 'LIKE', "%$search%");
                        });
                    });
            })
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.therapeuticarea.index', compact('data', 'search'));
    }

    public function create()
    {
        $categories = Category::where('status', 'Active')->orderBy('name', 'asc')->get();
        return view('admin.therapeuticarea.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:category,id',
            'sub_title' => 'required|string|max:255',
            'sort_description' => 'required|string',
            'approach_description' => 'required|string',
            'button_text' => 'required|string|max:255',
            'status' => 'required|in:Active,In-Active',
            'image'       => 'required|max:2048',
        ], [
            'category_id.required' => 'Please select category.',
            'sub_title.required' => 'Please enter title.',
            'image.required'       => 'An image is required.',
            'image.image'          => 'The uploaded file must be an image.',
            'image.max'            => 'The image size may not be greater than 2MB.',
        ]);

        $therapeuticArea = new TherapeuticArea();
        $therapeuticArea->category_id = $request->category_id;
        $therapeuticArea->sub_title = $request->sub_title;
        $therapeuticArea->sort_description = $request->sort_description;
        $therapeuticArea->approach_description = $request->approach_description;
        $therapeuticArea->button_text = $request->button_text;
        $therapeuticArea->status = $request->status;
        $therapeuticArea->save();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $therapeuticArea->id . '_' . $image->getClientOriginalName();
            $image->move(public_path('therapeutical_images/'), $imageName);
            $therapeuticArea->image = $imageName;
            $therapeuticArea->save();
        }

        return redirect()->route('therapeuticarea.index')->with('success', 'Therapeutic Area created successfully');
    }

    public function edit($id)
    {
        $data = TherapeuticArea::findOrFail($id);
        $categories = Category::where('status', 'Active')->orderBy('name', 'asc')->get();
        return view('admin.therapeuticarea.edit', compact('data', 'categories'));
    }

    public function update(Request $request, $id)
    {
       // echo "<pre>"; print_r($request->all()); echo "</pre>"; exit;
        $request->validate([
            'category_id' => 'required|exists:category,id',
            'sub_title' => 'required|string|max:255',
            'sort_description' => 'required|string',
            'approach_description' => 'required|string',
            'button_text' => 'required|string|max:255',
            'status' => 'required|in:Active,In-Active',
            'image' => 'nullable|max:2048',
        ], [
            'category_id.required' => 'Please select category.',
            'sub_title.required' => 'Please enter title.',
            'image.required'       => 'An image is required.',
            'image.max'            => 'The image size may not be greater than 2MB.',
        ]);

        $data = TherapeuticArea::findOrFail($id);
        $data->category_id = $request->input('category_id');
        $data->sub_title = $request->input('sub_title');
        $data->sort_description = $request->input('sort_description');
        $data->approach_description = $request->input('approach_description');
        $data->button_text = $request->input('button_text');
        $data->status = $request->input('status');
        $data->save();

        if ($request->hasFile('image')) {
            if($data->image && file_exists(public_path('therapeutical_images/' . $data->image))) {
                unlink(public_path('therapeutical_images/' . $data->image));
            }
            $image = $request->file('image');
            $imageName = time() . '_' . $data->id . '_' . $image->getClientOriginalName();
            $image->move(public_path('therapeutical_images/'), $imageName);
            $data->image = $imageName;
            $data->save();
        }

        return redirect()->route('therapeuticarea.index')->with('success', 'Therapeutic Area updated successfully');
    }

    public function destroy($id)
    {
        $data = TherapeuticArea::findOrFail($id);
        $data->delete();

        return redirect()->route('therapeuticarea.index')->with('success', 'Therapeutic Area deleted successfully');
    }
}
