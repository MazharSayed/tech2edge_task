@extends('layouts.adminlayout')

@section('content')

<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fas fa-list-alt"></i>
            </div>
            <div>All Pages
                <div class="page-title-subheading">You can view pages and their content blocks here.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <a href="{{ route('pages.create') }}" class="btn btn-primary">
                <i class="fa fa-plus"></i> Add New Page
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            @include('partials.alert') <!-- Including alert messages -->
            <div class="card-body">
                <h5 class="card-title">Pages and Content Blocks</h5>
                <table class="table table-striped" id="pagesTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Text Content</th>
                            <th>Image Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pages as $page)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $page->title ?? 'N/A' }}</td>
                            <td>{{ $page->slug ?? 'N/A' }}</td>
                            <td>
                                @foreach($page->contentBlocks as $block)
                                    @if($block->type === 'text')
                                        <p>{{ strip_tags($block->content ?? '') }}</p>
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($page->contentBlocks as $block)
                                    @if($block->type === 'image')
                                        <img src="{{ asset($block->content ?? 'svg/no-image.png') }}" alt="Image Block" width="50">
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <form action="{{ route('pages.destroy', $page->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this page?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Include jQuery and DataTables scripts --}}
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<script>
    $(document).ready(function() {
        $('#pagesTable').DataTable({
            "pageLength": 10,
            "ordering": true,
            "searching": true
        });
    });
</script>

@endsection
