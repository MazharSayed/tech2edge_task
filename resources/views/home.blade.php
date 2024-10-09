@extends('layouts.adminlayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Total Pages</div>
                <div class="card-body">
                    <h5 class="card-title text-white">{{ $pageCount }}</h5>
                    <p class="card-text">Number of pages created in the system.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Content Blocks</div>
                <div class="card-body">
                    <h5 class="card-title text-white">{{ $contentBlockCount }}</h5>
                    <p class="card-text">Total number of content blocks associated with all pages.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
