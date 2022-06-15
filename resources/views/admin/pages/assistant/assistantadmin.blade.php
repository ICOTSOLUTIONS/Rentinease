@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center justify-content-between">
                        <h4>Assistant Admin</h4>
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
                                    @foreach ($superadmins as $super)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $super->fname }}</td>
                                        <td>{{ $super->email }}</td>
                                        <td>
                                            <a href="{{ route('admins.edit',['id'=>$super->id]) }}" class="btn btn-info text-white">Edit</a>
                                            <a href="{{ route('admins.delete',['id'=>$super->id]) }}" class="btn btn-info text-white">Delete</a>
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