@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card design">
                    <div class="card-header text-center justify-content-between">
                        <h4>Admin</h4>
                        @if (auth()->user()->roles->name == 'admin')
                        <a href="{{ route('admin.create') }}"><button class="btn btn-success btn-hover">ADD
                                ADMIN</button></a>
                        @endif
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
                                        <th>
                                            #
                                        </th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Contact Number</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($admins as $admin)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $admin->fname }}</td>
                                        <td>{{ $admin->lname }}</td>
                                        <td>{{ $admin->email }}</td>
                                        <td>{{ $admin->phone }}</td>
                                        <td>{{ $admin->designation }}</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="{{ route('admin.edit', ['admin' => $admin->id]) }}" class="btn btn-info text-white">Edit</a>
                                                </div>
                                                <div class="col-md-4">
                                                    <a href="{{ route('admin.show',['admin'=>$admin->id]) }}" class="btn btn-info text-white">View</a>
                                                </div>
                                                @if ($admin->id != 1 && $admin->fname != 'admin')
                                                <div class="col-md-4">
                                                    <form action="{{ route('admin.destroy', ['admin' => $admin->id]) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                                                    </form>
                                                </div>
                                                @endif

                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="7">No data!</td>
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