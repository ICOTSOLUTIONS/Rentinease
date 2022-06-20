@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center justify-content-between">
                        <h4>BLOG</h4>
                        <a href="{{route('blog.create')}}"><button class="btn btn-success btn-hover">ADD BLOG</button></a>
                    </div>
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
                                    </tr>   
                                </thead>
                                <tbody>
                                    @forelse ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->header }}</td>
                                        <td>{{ $blog->image }}</td>
                                        <td>{{ $blog->text }}</td>
                                        @if(auth()->user()->roles->name != 'subadmin')
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="{{ route('blog.edit',['blog'=>$blog->id]) }}" class="btn btn-info text-white">Edit</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <form action="{{ route('blog.destroy',['blog'=>$blog->id]) }}" method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger text-white">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif
                                    </tr>
                                    @empty
                                        <tr>
                                            <td>No data</td>
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