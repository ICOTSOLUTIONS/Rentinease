@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-body mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card design">
                        <div class="card-header text-center justify-content-between">
                            <h4>BLOG</h4>
                            @if (auth()->user()->roles->name != 'subadmin')
                                <a href="{{ route('blog.create') }}"><button class="btn btn-success btn-hover">ADD
                                        BLOG</button></a>
                            @endif
                        </div>
                        @if (Session::has('message'))
                            <div class="alert alert-{{ Session::get('messageType') }}">
                                <strong>{{ Session::get('message') }} </strong>
                                <button type="button" class="btn-close float-right" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>Title</th>
                                            <th>Header</th>
                                            <th>Image</th>
                                            <th>Text</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($blogs as $blog)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $blog->title }}</td>
                                                <td>{{ $blog->heading }}</td>
                                                <td>
                                                    <a href="{{ asset('/storage/blog/'.$blog->image) }}" target="_blank">
                                                        <i class="fa fa-eye" aria-hidden="true">View</i>
                                                    </a>
                                                    </td>
                                                <td>{!! $blog->text !!}</td>
                                                @if (auth()->user()->roles->name != 'subadmin')
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="{{ route('blog.edit', ['blog' => $blog->id]) }}"
                                                                    class="btn btn-info text-white">Edit</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <form
                                                                    action="{{ route('blog.destroy', ['blog' => $blog->id]) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-white">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                @endif
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6">No data</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<!-- @section('script')
    <script>
        $(document).ready(function() {
            $('#dbtable').DataTable();
        });
    </script>
@endsection -->
