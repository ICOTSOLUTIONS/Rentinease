@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card design">
                    <div class="card-header text-center justify-content-between">
                        <h4>Admin</h4>
                        <a href="{{url('/addadmin')}}"><button class="btn btn-success btn-hover">ADD Admin</button></a>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-{{ Session::get('messageType') }}">
                            <strong>{{ Session::get('message') }} </strong>
                            <button type="button" class="btn-close float-right" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($admins as $admin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admin->fname }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>
                                            <a href="{{ route('admins.edit',['id'=>$admin->id]) }}" class="btn btn-info text-white">Edit</a>
                                            <a href="{{ route('admins.delete',['id'=>$admin->id]) }}" class="btn btn-info text-white">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
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