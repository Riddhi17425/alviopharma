@extends('admin.layouts.app')

@section('title', 'HomeMap Edit')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">HomeMap Edit</h3>
                <!--<button type="submit"-->
                <!--    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>-->
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('homemap.update',$homemap->id) }}">
            @csrf
            @method('PATCH')
            <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">HomeMap Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label">Select Main Title</label>
                                    <select class="form-select" name="cat_type" aria-label="Default select example">
                                        <option value="homemap" @if($homemap->cat_type ==
                                            'homemap') selected="selected" @endif>homemap</option>
                                        <option value="companymap" @if($homemap->cat_type == 'companymap') selected="selected" @endif>companymap</option>
                                        
                                        <option value="Others" @if($homemap->cat_type == 'Others') selected="selected" @endif>Others</option>
                                    </select>
                                    @if ($errors->has('cat_type'))
                                    <span class="text-danger">{{ $errors->first('cat_type') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $homemap->title }}" placeholder="HomeMap Title">
                                    @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label for="file" class="form-label">Images</label>
                                    <input type="file" class="form-control" name="image" id="image">
                                    @if ($errors->has('image'))
                                    <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    @if($homemap->image)
                                        <img 
                                            src="{{ asset('public/HomeMapimage/' . $homemap->image) }}" 
                                            alt="HomeMap Image"
                                            style="width:120px; height:auto; border:1px solid #ddd; padding:5px;">
                                    @endif

                                </div>
                                <div class="col-md-12>
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" name="description" class="form-control" required>{!! $homemap->description !!}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>
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
<script src="{!! asset('public/admin_public/dist/assets/plugin/multi-select/js/jquery.multi-select.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/plugin/bootstrap-tagsinput/bootstrap-tagsinput.js') !!}">
</script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dropify.bundle.js') !!}"></script>
<script src="{!! asset('public/admin_public/dist/assets/bundles/dataTables.bundle.js') !!}"></script>


<script>
$(document).ready(function() {
    $('#description').summernote({
        placeholder: 'Enter here...',
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
