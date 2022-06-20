@extends('admin.layouts.master')

@section('content')
<style>
    .input-group-text,
    select.form-control:not([size]):not([multiple]),
    .form-control:not(.form-control-sm):not(.form-control-lg) {
        font-size: 14px;
        background-color: white;
        padding: 0 15px;
        height: 28px;
    }

    .width {
        width: 10%;
    }

    .dark .note-editor.note-frame .note-editing-area .note-editable {
        background-color: white !important;
        height: 200px !important;
    }

    .note-editor .note-toolbar,
    .note-popover .popover-content {
        background-color: white !important;
        color: black;
    }
    .dark .note-editor.note-frame .note-toolbar button{
        color: black;
    }
    .dark .card .card-body p{
        color: black;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card design">
                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
                        <div class="card-header justify-content-center">
                            <h4>Add Blog</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="">Title
                                        <input type="text" class="form-control">
                                    </label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Header
                                        <input type="text" class="form-control">
                                    </label>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="">Picture
                                        <input type="file" class="form-control">
                                    </label>
                                </div>
                                <div class="col-md-12">
                                    <textarea name="text" id="summernote"></textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-success w-100">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@endsection