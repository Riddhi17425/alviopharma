<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\KeyIngredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class KeyIngredientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $data = KeyIngredient::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('title', 'LIKE', "%$search%");
            })
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.keyingredient.keyingredient-list', compact('data', 'search'));
    }

    public function create()
    {
        return view('admin.keyingredient.keyingredient-add');
    }

    public function store(Request $request)
    {
        $request->merge([
            'url' => $this->normalizeSlug($request->input('url') ?: $request->input('title')),
        ]);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => [
                'required',
                'string',
                'max:255',
                Rule::unique('key_ingredient', 'url')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],
            'image' => 'required|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
        ], [
            'title.required' => 'Please enter a title.',
            'description.required' => 'Please enter a description.',
            'url.required' => 'Please enter a URL.',
            'image.required' => 'Please select an image.',
        ]);

        $data = new KeyIngredient();
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->url = $request->input('url');
        $data->image = $this->storeImage($request->file('image'));
        $data->save();

        return redirect()->route('keyingredient.index')->with('success', 'Key Ingredient created successfully');
    }

    public function edit($id)
    {
        $data = KeyIngredient::findOrFail($id);

        return view('admin.keyingredient.keyingredient-edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = KeyIngredient::findOrFail($id);

        $request->merge([
            'url' => $this->normalizeSlug($request->input('url') ?: $request->input('title')),
        ]);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'url' => [
                'required',
                'string',
                'max:255',
                Rule::unique('key_ingredient', 'url')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                })->ignore($data->id),
            ],
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp,gif|max:2048',
        ], [
            'title.required' => 'Please enter a title.',
            'description.required' => 'Please enter a description.',
            'url.required' => 'Please enter a URL.',
        ]);

        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->url = $request->input('url');

        if ($request->hasFile('image')) {
            $this->deleteImage($data->image);
            $data->image = $this->storeImage($request->file('image'));
        }

        $data->save();

        return redirect()->route('keyingredient.index')->with('success', 'Key Ingredient updated successfully');
    }

    public function destroy($id)
    {
        $data = KeyIngredient::findOrFail($id);

        $this->deleteImage($data->image);
        $data->delete();

        return redirect()->route('keyingredient.index')->with('success', 'Key Ingredient deleted successfully');
    }

    private function normalizeSlug($value)
    {
        return Str::slug($value);
    }

    private function storeImage($file)
    {
        $destination = public_path('keyingredientimage');

        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0755, true);
        }

        $name = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '_' . Str::slug($name) . '.' . $extension;

        $file->move($destination, $fileName);

        return $fileName;
    }

    private function deleteImage($fileName)
    {
        if (!$fileName) {
            return;
        }

        $filePath = public_path('keyingredientimage/' . $fileName);

        if (File::exists($filePath)) {
            File::delete($filePath);
        }
    }
}