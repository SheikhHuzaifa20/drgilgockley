@extends('layouts.app')

@push('before-css')
    <link rel="stylesheet" href="{{ asset('plugins/vendors/dropify/dist/css/dropify.min.css') }}">
@endpush

@section('content')

    <div class="content-header row">
        <div class="content-header-left col-md-12 col-12 mb-2 breadcrumb-new">
            <h3 class="content-header-title mb-0 d-inline-block">Create New Blog</h3>
            <div class="row breadcrumbs-top d-inline-block">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('admin/blog') }}">Blog Management</a></li>
                        <li class="breadcrumb-item active">Create New Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <section id="basic-form-layouts">
            <div class="row match-height">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-form">Blog Info</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <form class="form" enctype="multipart/form-data" method="post"
                                    action="{{ route('admin.blog.store') }}">
                                    @csrf
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="title">Title</label>
                                                    <input class="form-control" required name="title" type="text"
                                                        id="title">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="summary-ckeditor">Description</label>
                                                    <textarea name="description" id="summary-ckeditor" cols="30" rows="10" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="summary-ckeditor">Blog Image</label>
                                                    <div class="upload-photo">
                                                        <input type="file" name="image" id="input-file-now"
                                                            class="dropify" required />
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Inner Page Section with Toggle -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Inner Page Content <span class="text-danger">*</span></label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inner_type" id="inner_desc_radio"
                                                                    value="description" checked>
                                                                <label class="form-check-label"
                                                                    for="inner_desc_radio">Description</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inner_type" id="inner_link_radio" value="link">
                                                                <label class="form-check-label"
                                                                    for="inner_link_radio">Link</label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Description Input -->
                                                    <div id="inner_desc_wrapper">
                                                        <textarea name="inner_desc" id="inner_desc" cols="30" rows="10" class="form-control"
                                                            placeholder="Enter inner page description"></textarea>
                                                    </div>

                                                    <!-- Link Input -->
                                                    <div id="inner_link_wrapper" style="display: none;">
                                                        <input type="url" name="link" id="inner_link"
                                                            class="form-control"
                                                            placeholder="Enter link URL (e.g., https://example.com)">
                                                    </div>

                                                    <small class="text-muted">Either Description or Link is required</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions text-right pb-0">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="la la-check-square-o"></i> Add
                                        </button>
                                    </div>
                                </form>

                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title" id="basic-layout-colored-form-control">Information</h4>
                            <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                            <div class="heading-elements">
                                <ul class="list-inline mb-0">
                                    <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                    <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                    <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                    <li><a data-action="close"><i class="ft-x"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-content collapse show">
                            <div class="card-body">
                                <div class="card-text">
                                    @if ($errors->any())
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li class="alert alert-danger">{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif

                                    @if (Session::has('message'))
                                        <ul>
                                            <li class="alert alert-success">{{ Session::get('message') }}</li>
                                        </ul>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('js')
    <script src="{{ asset('plugins/vendors/dropify/dist/js/dropify.min.js') }}"></script>
    <script>
        $(function() {
            $('.dropify').dropify();
        });
    </script>
    <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const descRadio = document.getElementById('inner_desc_radio');
                                        const linkRadio = document.getElementById('inner_link_radio');
                                        const descWrapper = document.getElementById('inner_desc_wrapper');
                                        const linkWrapper = document.getElementById('inner_link_wrapper');
                                        const descTextarea = document.getElementById('inner_desc');
                                        const linkInput = document.getElementById('inner_link');

                                        function toggleInputs() {
                                            if (descRadio.checked) {
                                                descWrapper.style.display = 'block';
                                                linkWrapper.style.display = 'none';
                                                descTextarea.required = true;
                                                linkInput.required = false;
                                                linkInput.value = '';
                                            } else {
                                                descWrapper.style.display = 'none';
                                                linkWrapper.style.display = 'block';
                                                descTextarea.required = false;
                                                linkInput.required = true;
                                                descTextarea.value = '';
                                            }
                                        }

                                        descRadio.addEventListener('change', toggleInputs);
                                        linkRadio.addEventListener('change', toggleInputs);

                                        // Initialize
                                        toggleInputs();
                                    });
                                </script>
@endpush
