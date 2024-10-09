@extends('layouts.adminlayout')
@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fab fa-product-hunt"></i>
            </div>
            <div> Add New Page </div>
        </div>
        <div class="page-title-actions">
            <ul class="list-inline">
                <li class="list-inline-item"> <a href="{{ route('home') }}">Home</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item"><a href="{{ route('pages.index') }}">Pages</a></li>
                <li class="list-inline-item">/</li>
                <li class="list-inline-item">Add Page</li>
            </ul>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Create Page</h5>

                <form class="needs-validation" novalidate method="POST" action="{{ route('pages.store') }}" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <!-- Title Field -->
                    <div class="form-group">
                        <label for="title">Title <span class="text-danger">*</span></label>
                        <input type="text" id="title" name="title" class="form-control" value="{{ old('title') }}" required placeholder="Enter page title">
                        <div class="invalid-feedback">Please provide a title for the page.</div>
                    </div>

                    <!-- Text Content Field -->
                    <div class="form-group">
                        <label for="text_content">Text Content <span class="text-danger">*</span></label>
                        <textarea id="text_content" name="text_content" class="form-control" rows="5" required placeholder="Enter your text content here">{{ old('text_content') }}</textarea>
                        <div class="invalid-feedback">Please provide text content.</div>
                    </div>

                    <!-- Image Content Field -->
                    <div class="form-group">
                        <label for="image_content">Image Content <span class="text-danger">*</span></label>
                        <input type="file" name="image_content" class="form-control" required>
                        <div class="invalid-feedback">Please upload an image.</div>
                    </div>

                    <button class="btn btn-success" type="submit">Add Page</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

<script>
    CKEDITOR.editorConfig = function( config ) {
        config.versionCheck = false;
    };

    document.addEventListener("DOMContentLoaded", function () {
        CKEDITOR.replace('text_content', {
            versionCheck: false,
            toolbar: [
                { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'Undo', 'Redo'] },
                { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline'] },
                { name: 'paragraph', items: ['NumberedList', 'BulletedList', 'Blockquote'] },
                { name: 'links', items: ['Link', 'Unlink'] },
                { name: 'insert', items: ['Table', 'HorizontalRule'] },
                { name: 'tools', items: ['Maximize'] }
            ]
        });
    });
</script>

@endsection
