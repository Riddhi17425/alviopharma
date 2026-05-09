@extends('admin.layouts.app')

@section('title', 'Therapeutic Areas Edit')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Therapeutic Areas Edit</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="POST"
        action="{{ route('therapeuticarea.update', $data->id) }}"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
            <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Therapeutic Area Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-start">
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
                                    <select name="category_id" class="form-control">
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ old('category_id', $data->category_id) == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('category_id'))
                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" name="sub_title" class="form-control" value="{{ old('sub_title', $data->sub_title) }}" placeholder="Enter sub title">
                                    @if ($errors->has('sub_title'))
                                        <span class="text-danger">{{ $errors->first('sub_title') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Sort Description</label>
                                    <textarea name="sort_description" class="form-control" rows="4" placeholder="Enter short description">{{ old('sort_description', $data->sort_description) }}</textarea>
                                    @if ($errors->has('sort_description'))
                                        <span class="text-danger">{{ $errors->first('sort_description') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Approach Description</label>
                                    <textarea id="approach_description" name="approach_description" class="form-control" rows="6" placeholder="Enter approach description">{!! old('approach_description', $data->approach_description) !!}</textarea>
                                    @if ($errors->has('approach_description'))
                                        <span class="text-danger">{{ $errors->first('approach_description') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" name="button_text" class="form-control" value="{{ old('button_text', $data->button_text) }}" placeholder="Enter button text">
                                    @if ($errors->has('button_text'))
                                        <span class="text-danger">{{ $errors->first('button_text') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="Active" {{ old('status', $data->status) == 'Active' ? 'selected' : '' }}>Active</option>
                                        <option value="In-Active" {{ old('status', $data->status) == 'In-Active' ? 'selected' : '' }}>In-Active</option>
                                    </select>
                                    @if ($errors->has('status'))
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label">Image</label><span class="text-danger">*</span>
                                    <input type="file" name="image" class="form-control">
                                    @if(isset($data->image))
                                            <img src="{{ asset('public/therapeutical_images/'.$data->image) }}" width="100">
                                        @endif
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
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
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    $('#approach_description').summernote({
        placeholder: 'Enter approach description',
        height: 250,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['insert', ['link']],
            ['view', ['codeview']]
        ]
    });
});
</script>
@endpush
