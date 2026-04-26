@extends('admin.layouts.app')

@section('title', 'Divisions')

@section('content')
<div class="container-xxl">
    <div class="row align-items-center">
        <div class="border-0 mb-4">
            <div
                class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                <h3 class="fw-bold mb-0">Divisions Add</h3>
            </div>
        </div>
    </div>

    <div class="card-body">
        <form method="post" enctype="multipart/form-data" action="{{ route('divisions.store') }}" data-divisions-form>
            @csrf
            <div class="row g-3 mb-3">
                <div class="col-lg-12">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold">Divisions Details</h6>
                        </div>
                        <div class="card-body">
                            <div class="row g-3 align-items-start">
                                <div class="col-md-6">
                                    <label class="form-label">Title</label>
                                    <input type="text" id="name" name="name" class="form-control"
                                        data-divisions-title
                                        value="{{ old('title') }}" placeholder="Divisions Title">
                                    @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label">URL</label>
                                    <input type="text" id="url" name="url" class="form-control"
                                        data-divisions-url
                                        value="{{ old('url') }}" placeholder="divisions-url">
                                    @if ($errors->has('url'))
                                    <span class="text-danger">{{ $errors->first('url') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label">Satus</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="Active">Active</option>
                                        <option value="In-Active">In-Active</option>
                                    </select>
                                    @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                    @endif
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
<script src="{{ asset('public/admin_public/js/divisions.js') }}"></script>
@endpush