@extends('admin.layouts.app')

@section('title', 'Edit Product')
<style>
    .ingredient-box {
    display: inline-block;
    border: 1px solid #ccc;
    padding: 6px 12px;
    margin: 5px;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.ingredient-box input {
    display: none;
}

.ingredient-box.active {
    background: #007bff;
    color: #fff;
    border-color: #007bff;
}

.selected-box {
    margin-top: 10px;
}

.selected-tag {
    display: inline-block;
    background: #28a745;
    color: #fff;
    padding: 5px 10px;
    margin: 3px;
    border-radius: 5px;
}
.ingredient-box {
    display: inline-block;
    padding: 8px 12px;
    border: 1px solid #ddd;
    margin: 5px;
    border-radius: 6px;
    cursor: pointer;
}

.ingredient-box input {
    display: none;
}

.ingredient-box.active {
    background: #0d6efd;
    color: #fff;
    border-color: #0d6efd;
}

/* Selected Preview */
.selected-box span {
    display: inline-block;
    background: #198754;
    color: #fff;
    padding: 5px 10px;
    margin: 5px;
    border-radius: 20px;
    font-size: 13px;
}
</style>
@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Edit Product</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('product.update', $data->id) }}" data-products-form>
            @csrf
            @method('PUT')

            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Product Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">
                        {{-- BRAND --}}
                        <div class="col-md-6">
                            <label class="form-label">Brand</label>
                            <select name="brand_id" class="form-control">
                                <option value="">Select Brand</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}" {{ $brand->id == $data->brand_id ? 'selected' : '' }}>
                                        {{ $brand->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- CATEGORY --}}
                        <div class="col-md-6">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-control">
                                @foreach($category as $cat)
                                    <option value="{{ $cat->url }}" {{ $cat->url == $data->category_url ? 'selected' : '' }}>
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- DIVISION --}}
                        <div class="col-md-6">
                            <label class="form-label">Division</label>
                            <select name="divisions" class="form-control">
                                @foreach($divisions as $div)
                                    <option value="{{ $div->url }}" {{ $div->url == $data->divisions_url ? 'selected' : '' }}>
                                        {{ $div->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- NAME --}}
                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="{{ $data->name }}" class="form-control" data-products-name>
                        </div>

                        {{-- URL --}}
                        <div class="col-md-6">
                            <label class="form-label">URL</label>
                            <input type="text" name="url" value="{{ $data->url }}" class="form-control" data-products-url>
                        </div>

                        {{-- META TITLE --}}
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" value="{{ $data->meta_title }}" class="form-control" data-products-meta-title>
                        </div>

                        {{-- FRONT IMAGE --}}
                        <div class="col-md-6">
                            <label class="form-label">Front Image</label>
                            <input type="file" name="front_image" class="form-control" id="front_image">

                            <img id="front_image_preview"
                                src="{{ $data->front_image ? asset('public/product/front_image/'.$data->front_image) : '' }}"
                                style="margin-top:10px; max-width:150px; {{ $data->front_image ? '' : 'display:none;' }}">
                        </div>

                        {{-- DETAIL IMAGES --}}
                        <div class="col-md-6">
                            <label class="form-label">Detail Images</label>
                            <input type="file" name="detail_images[]" class="form-control" id="detail_images" multiple>

                            <div id="detail_images_preview" style="margin-top:10px; display:flex; gap:10px; flex-wrap:wrap;">
                                @php $images = json_decode($data->detail_images, true); @endphp
                                @if(is_array($images))
                                    @foreach($images as $img)
                                        <img src="{{ asset('public/product/details_image/'.$img) }}" style="max-width:100px;">
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        {{-- STATUS --}}
                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="Active" {{ $data->status == 'Active' ? 'selected' : '' }}>Active</option>
                                <option value="In-Active" {{ $data->status == 'In-Active' ? 'selected' : '' }}>In-Active</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Top Seller / Featured</label>
                            <select name="top_sellers" class="form-control">
                                <option value="No" {{ $data->top_sellers == 'No' ? 'selected' : '' }}>No</option>
                                <option value="Yes" {{ $data->top_sellers == 'Yes' ? 'selected' : '' }}>Yes</option>
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label class="form-label">Key Ingredients</label>

                            @php
                                $selectedIngredients = json_decode($data->key_ingredients, true) ?? [];
                            @endphp

                            <div id="ingredientBoxWrap">
                                @foreach($key_ingredient as $ingredient)
                                    <label class="ingredient-box 
                                        {{ in_array($ingredient->id, $selectedIngredients) ? 'active' : '' }}">
                                        
                                        <input type="checkbox" 
                                            name="key_ingredients[]" 
                                            value="{{ $ingredient->id }}"
                                            {{ in_array($ingredient->id, $selectedIngredients) ? 'checked' : '' }}>
                                        
                                        <span>{{ $ingredient->title }}</span>
                                    </label>
                                @endforeach
                            </div>

                            {{-- Selected Label --}}
                            <div class="mt-2"><strong>Selected:</strong></div>

                            {{-- Selected Preview --}}
                            <div id="selectedIngredients" class="selected-box"></div>

                            @if ($errors->has('key_ingredients'))
                                <span class="text-danger">{{ $errors->first('key_ingredients') }}</span>
                            @endif
                        </div>

                        {{-- SHORT DESCRIPTION --}}
                        <div class="col-md-12">
                            <label class="form-label">Short Description</label>
                            <textarea name="short_description" id="short_description" class="form-control">
                                {{ $data->short_description }}
                            </textarea>
                        </div>

                        {{-- DESCRIPTION --}}
                        <div class="col-md-12">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="description" class="form-control">
                                {{ $data->description }}
                            </textarea>
                        </div>

                        {{-- META DESCRIPTION --}}
                        <div class="col-md-12">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" id="meta_description" class="form-control">
                                {{ $data->meta_description }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
<!-- Dropify CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/dropify/dist/css/dropify.min.css">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Dropify JS -->
<script src="https://cdn.jsdelivr.net/npm/dropify/dist/js/dropify.min.js"></script>
<script src="{{ asset('public/admin_public/js/products.js') }}"></script>

<script>
$(document).ready(function() {
    $('.dropify').dropify();
    $('#description').summernote({
        placeholder: 'Enter Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    $('#short_description').summernote({
        placeholder: 'Enter Short Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
   
    $('#meta_description').summernote({
        placeholder: 'Enter Meta Description here...',
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['insert', ['link', 'picture', 'hr']],
            ['view', ['fullscreen', 'codeview']],
            ['help', ['help']]
        ]
    });
    
});
@endpush