<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\divisions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class DivisionsController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $data = Divisions::whereNull('deleted_at')
            ->when($search, function ($query) use ($search) {
                $query->where('name', 'LIKE', "%$search%");
            })
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return view('admin.divisions.index', compact('data', 'search'));
    }

    public function create()
    {
        return view('admin.divisions.create');
    }

    public function store(Request $request)
    {
        $request->merge([
            'url' => $this->normalizeSlug($request->input('url') ?: $request->input('name')),
        ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:Active,In-Active',
            'url' => [
                'required',
                'string',
                'max:255',
                Rule::unique('divisions', 'url')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                }),
            ],
            
        ], [
            'name.required' => 'Please enter a name.',
        ]);

        $data = new Divisions();
        $data->name = $request->input('name');
        $data->url = $request->input('url');
        $data->status = $request->input('status');
        $data->save();

        return redirect()->route('divisions.index')->with('success', 'Key Ingredient created successfully');
    }

    public function edit($id)
    {
        $data = Divisions::findOrFail($id);

        return view('admin.divisions.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Divisions::findOrFail($id);

        $request->merge([
            'url' => $this->normalizeSlug($request->input('url') ?: $request->input('name')),
        ]);

        $request->validate([
            'name' => 'required|string|max:255',
            'status' => 'required|in:Active,In-Active',

            'url' => [
                'required',
                'string',
                'max:255',
                Rule::unique('key_ingredient', 'url')->where(function ($query) {
                    return $query->whereNull('deleted_at');
                })->ignore($data->id),
            ],
            
        ], [
            'name.required' => 'Please enter a name.',
            'url.required' => 'Please enter a URL.',
        ]);

        $data->name = $request->input('name');
        $data->url = $request->input('url');
        $data->status = $request->input('status');
        $data->save();

        return redirect()->route('divisions.index')->with('success', 'Key Ingredient updated successfully');
    }

    public function destroy($id)
    {
        $data = Divisions::findOrFail($id);
        $data->delete();

        return redirect()->route('divisions.index')->with('success', 'Key Ingredient deleted successfully');
    }

    private function normalizeSlug($value)
    {
        return Str::slug($value);
    }

    
    
}