@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center justify-content-between">
                        <h4>AGENCY</h4>
                        @if(auth()->user()->roles->name != 'subadmin')
                            <a href="{{route('agency.create')}}"><button class="btn btn-success btn-hover">ADD AGENCY</button></a>
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
                            <table class="table table-striped text-center" id="table-1">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Owner Name</th>
                                        <th>Email</th>
                                        <th>Company Name</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Country</th>
                                        <th>Package</th>
                                        {{-- <th>Access of Agents</th> --}}
                                        <th>Office</th>
                                    @if(auth()->user()->roles->name != 'subadmin')
                                        <th>Action</th>
                                    @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($agencies))
                                        @foreach ($agencies as $agency)
                                            <tr>
                                                <td>{{ $loop->iteration}}</td>
                                                <td>{{ $agency->owner_name }}</td>
                                                <td>{{ $agency->email }}</td>
                                                <td>{{ $agency->company_name }}</td>
                                                <td>{{ $agency->phone }}</td>
                                                <td>{{ $agency->mobile }}</td>
                                                <td>{{ $agency->country }}</td>
                                                <td>
                                                    @forelse ($agency->packages as $package )
                                                        {{ $package->name }}    
                                                    @empty
                                                        No Package
                                                    @endforelse
                                                    </td>
                                                {{-- <td>{{ $agency->access_of_agents }}</td> --}}
                                                <td>{{ $agency->office }}</td>
                                            @if(auth()->user()->roles->name != 'subadmin')
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="{{ route('agency.edit',['agency'=>$agency->id]) }}" class="btn btn-info text-white">Edit</a>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <form action="{{ route('agency.destroy',['agency'=>$agency->id]) }}" method="POST">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button type="submit" class="btn btn-danger text-white">Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif
                                            </tr>
                                        @endforeach
                                    @endif
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
@section('script')
<!--<script>
    $(document).ready(function() {
        $('#dbtable').DataTable();
    });
</script>-->
@endsection