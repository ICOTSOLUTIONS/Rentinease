@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center justify-content-between">
                        <h4>VISITOR CUSTOMERS</h4>
                        <a href="{{route('customer.create')}}"><button class="btn btn-success btn-hover">ADD CUSTOMER </button></a>
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
                                        <th class="text-center">#</th>
                                        <th>Fisrt Name</th>
                                        <th>Last Name</th> 
                                        <th>Email</th> 
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Country</th>
                                        <th>Office</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($customers as $customer)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $customer->fname }}</td>
                                            <td>{{ $customer->lname }}</td>
                                            <td>{{ $customer->email }}</td>
                                            <td>{{ $customer->phone }}</td>
                                            <td>{{ $customer->mobile }}</td>
                                            <td>{{ $customer->country }}</td>
                                            <td>{{ $customer->office }}</td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <a href="{{ route('customer.edit',['customer'=>$customer->id]) }}" class="btn btn-info text-white">Edit</a>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <form action="{{ route('customer.destroy',['customer'=>$customer->id]) }}" method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger text-white">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
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