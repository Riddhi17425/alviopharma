@extends('admin.layouts.app')

@section('title', 'Milestone Edit')

@section('content')
<div class="container-xxl">

    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Milestone Edit</h3>
                <!--<button type="submit"-->
                <!--    class="btn btn-primary py-2 px-5 text-uppercase btn-set-task w-sm-100">Save</button>-->
            </div>
        </div>
    </div> <!-- Row end  -->
    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('milestone.update',$milestone->id) }}">
            @csrf
            @method('PATCH')
            <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Milestone Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="title" name="title" class="form-control"
                                        value="{{ $milestone->title }}" placeholder="industries Title">
                                    @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                 <div class="col-md-6">
                                    <label class="form-label">Year</label>
                                    <input type="text" id="year" name="year" value="{{ $milestone->year }}" class="form-control" >
                                    @if ($errors->has('year'))
                                    <span class="text-danger">{{ $errors->first('year') }}</span>
                                    @endif
                                </div>

                               <div class="col-md-6">
                                    <label for="phase_title" class="form-label">Phase Title</label>
                                    <input type="text" id="phase_title" class="form-control" value="{{ $milestone->phase_title }}" name="phase_title" placeholder="Phase Title Add." >
                                </div>
                                <div class="col-md-6">
                                    <label for="phase_id" class="form-label">Phase ID</label>
                                    <input type="number" id="phase_id" class="form-control" value="{{ $milestone->phase_id }}"  name="phase_id" placeholder="Phase Title id." >
                                </div>

                                <div class="col-md-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea id="description" name="description" class="form-control">{!! $milestone->description !!}</textarea>
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
<link rel="stylesheet" href="yearpicker.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"/>
<link rel="stylesheet" href="{{ asset('public/admin_public/plugins/daterangepicker/daterangepicker.css') }}">
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

<script src="{{ asset('public/admin_public/plugins/daterangepicker/daterangepicker.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="yearpicker.js" ></script>
<script>
    $(document).ready(function () {
    $('#year').datepicker({
        format: "yyyy",          
        viewMode: "years",       
        minViewMode: "years",    
        autoclose: true,         
        // startDate: "1900",       
        // endDate: new Date().getFullYear().toString(),
        orientation: "bottom",
        container: 'body',
        appendTo: 'body',
    });

    
});
</script>


<script>
$(document).ready(function() {
    $('#description,#short_description').summernote({
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
