@extends('agency.layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center justify-content-between">
                                <h4>AGENT</h4>
                                <a href="{{ route('agency.agent.create') }}"><button class="btn btn-success btn-hover">ADD
                                        AGENT</button></a>
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
                                                <th>#</th>
                                                <th>Owner Name</th>
                                                <th>Email</th>
                                                <th>Company Name</th>
                                                <th>Phone</th>
                                                <th>Mobile</th>
                                                <th>Country</th>
                                                {{-- <th>Coins of Agents</th> --}}
                                                <th>Office</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($agents as $agent)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $agent->owner_name }}</td>
                                                    <td>{{ $agent->email }}</td>
                                                    <td>{{ $agent->company_name }}</td>
                                                    <td>{{ $agent->phone }}</td>
                                                    <td>{{ $agent->mobile }}</td>
                                                    <td>{{ $agent->country }}</td>
                                                    <td>{{ $agent->office }}</td>
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <a href="{{ route('agency.agent.edit', ['agent' => $agent->id]) }}"
                                                                    class="btn btn-info text-white">Edit</a>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <a href="{{ route('agency.agent.show', ['agent' => $agent->id]) }}"
                                                                    class="btn btn-info text-white">View</a>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <form
                                                                    action="{{ route('agency.agent.destroy', ['agent' => $agent->id]) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-white">Delete</button>
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
    </div>
@endsection
<!-- @section('script')
    <script>
        $(document).ready(function() {
            $('#dbtable').DataTable();
        });
    </script>
@endsection -->
