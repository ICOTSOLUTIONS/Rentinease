@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-body mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center justify-content-between">
                            <h4>Customer Service</h4>
                            @if (auth()->user()->roles->name == 'admin')
                                <a href="{{ route('customerservice.create') }}"><button class="btn btn-success btn-hover">ADD
                                        CUSTOMERS SERVICE</button></a>
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
                                        @forelse ($customerservices as $customerservice)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $customerservice->fname }}</td>
                                                <td>{{ $customerservice->lname }}</td>
                                                <td>{{ $customerservice->email }}</td>
                                                <td>{{ $customerservice->phone }}</td>
                                                <td>{{ $customerservice->designation }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="{{ route('customerservice.edit', ['customerservice' => $customerservice->id]) }}"
                                                                class="btn btn-info text-white">Edit</a>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <a href="{{ route('customerservice.show',['customerservice'=>$customerservice->id]) }}" class="btn btn-info text-white">View</a>
                                                        </div>
                                                        {{-- @if ($customerservice->id != 1 && $customerservice->fname != 'superadmin') --}}
                                                            <div class="col-md-6">
                                                                <form
                                                                    action="{{ route('customerservice.destroy', ['customerservice' => $customerservice->id]) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-white">Delete</button>
                                                                </form>
                                                            </div>
                                                        {{-- @endif --}}

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
