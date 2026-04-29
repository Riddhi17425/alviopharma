@extends('admin.layouts.app')

@section('title', 'Product Add')
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
                <h3 class="fw-bold mb-0">Product Add</h3>
            </div>
        </div>
    </div> <!-- Row end -->

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('product.store') }}" data-products-form>
            @csrf
            <div class="col-xl-12 col-lg-8">
                <div class="card mb-3 p-3">
                    <div class="card-header py-3 p-0 d-flex justify-content-between bg-transparent border-bottom-0">
                        <h6 class="mb-0 fw-bold">Product Information</h6>
                    </div>
                    <div class="row g-3 align-items-center">

                        <div class="col-md-6">
                            <label class="form-label">Brand Id</label>
                            <select name="brand_id" class="form-control">
                                <option value="">Select Brand</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}">
                                    {{ $brand->title }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('brand_id'))
                            <span class="text-danger">{{ $errors->first('brand_id') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Category</label>
                            <select name="category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($category as $data)
                                <option value="{{ $data->url }}">
                                    {{ $data->name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                            <span class="text-danger">{{ $errors->first('category') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Divisions</label>
                            <select name="divisions" class="form-control">
                                <option value="">Select Divisions</option>
                                @foreach($divisions as $data)
                                <option value="{{ $data->url }}">
                                    {{ $data->name }}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('divisions'))
                            <span class="text-danger">{{ $errors->first('divisions') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Enter Product Name" data-products-name>
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Url</label>
                            <input type="text" id="url" name="url" class="form-control" placeholder="enter-product-url"
                                data-products-url>
                            @if ($errors->has('url'))
                            <span class="text-danger">{{ $errors->first('url') }}</span>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Meta Title</label>
                            <input type="text" id="meta_title" name="meta_title" class="form-control"
                                placeholder="Enter Meta Title" data-products-meta-title>
                            @if ($errors->has('meta_title'))
                            <span class="text-danger">{{ $errors->first('meta_title') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Front Image</label>
                            <input type="file" id="front_image" name="front_image" class="form-control"
                                accept="image/*">

                            <img id="front_image_preview"
                                src="{{ isset($data->front_image) ? asset('public/product_front_image/'.$data->front_image) : '' }}"
                                style="margin-top:10px; max-width:150px; {{ isset($data->front_image) ? '' : 'display:none;' }}">
                            @if ($errors->has('front_image'))
                                <span class="text-danger">{{ $errors->first('front_image') }}</span>
                            @endif
                        </div>


                        <div class="col-md-6">
                            <label class="form-label">Detail Images</label>
                            <input type="file" id="detail_images" name="detail_images[]" class="form-control" multiple
                                accept="image/*">

                            {{-- Preview container --}}
                            <div id="detail_images_preview"
                                style="margin-top:10px; display:flex; gap:10px; flex-wrap:wrap;">

                                {{-- Edit mode: show existing images --}}
                                @if(isset($data->detail_images))
                                    @php $images = json_decode($data->detail_images, true); @endphp

                                    @if(is_array($images))
                                        @foreach($images as $img)
                                            <img src="{{ asset('public/product_detail_files/'.$img) }}" style="max-width:100px;">
                                        @endforeach
                                    @endif
                                @endif

                            </div>
                             @if ($errors->has('detail_images'))
                                <span class="text-danger">{{ $errors->first('detail_images') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="Active">Active</option>
                                <option value="In-Active">In-Active</option>
                            </select>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Top Seller / Featured</label>
                            <select name="top_sellers" class="form-control">
                                <option value="No" selected>No</option>
                                <option value="Yes">Yes</option>
                            </select>

                            @if ($errors->has('top_sellers'))
                                <span class="text-danger">{{ $errors->first('top_sellers') }}</span>
                            @endif
                        </div>


                        <div class="col-md-12">
                            <label class="form-label">Key Ingredients</label>

                            <div id="ingredientBoxWrap">
                                @foreach($key_ingredient as $ingredient)
                                    <label class="ingredient-box">
                                        <input type="checkbox" name="key_ingredients[]" value="{{ $ingredient->id }}">
                                        <span>{{ $ingredient->title }}</span>
                                    </label>
                                @endforeach
                            </div>
                            
                            {{-- Selected Label --}}
                            <div class="mt-3">
                                <strong>Selected:</strong>
                            </div>
                            {{-- Selected Preview --}}
                            <div id="selectedIngredients" class="selected-box"></div>

                            @if ($errors->has('key_ingredients'))
                                <span class="text-danger">{{ $errors->first('key_ingredients') }}</span>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <label for="short_description" class="form-label">Short description</label>
                            <textarea id="short_description" name="short_description" class="form-control"></textarea>
                            @if ($errors->has('short_description'))
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control"></textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="col-md-12">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea id="meta_description" name="meta_description" class="form-control"></textarea>
                            @if ($errors->has('meta_description'))
                            <span class="text-danger">{{ $errors->first('meta_description') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
    
            <button type="submit" class="btn btn-primary btn-set-task w-sm-100 py-2 px-5 text-uppercase">Save</button>
        </form>
    </div>
</div>
@endsection
@push('styles')
<!-- Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">

<!-- Cropper CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<!--plugin css file -->
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/multi-select/css/multi-select.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.css') !!}">
<link rel="stylesheet" href="{!! asset('public/admin_public/dist/assets/plugin/dropify/dist/css/dropify.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/responsive.dataTables.min.css') !!}">
<link rel="stylesheet"
    href="{!! asset('public/admin_public/dist/assets/plugin/datatables/dataTables.bootstrap5.min.css') !!}">
@endpush

@push('scripts')
<!-- Summernote JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<!-- Cropper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="{{ asset('public/admin_public/js/products.js') }}"></script>


<script>
    $(document).ready(function () {
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
</script>
@endpush