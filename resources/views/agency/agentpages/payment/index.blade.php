@extends('agency.layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
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
                                                <th>Name</th>
                                                <th>Coins</th>
                                                <th>Duration Time</th>
                                                <th>Duration Period</th>
                                                <th>Description</th>
                                                @if (empty(auth()->user()->agency_id))
                                                    <th>Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($packages as $package)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $package->name }}</td>
                                                    <td>{{ $package->coins }}</td>
                                                    <td>{{ $package->duration_time }}</td>
                                                    <td>{{ $package->duration_period }}</td>
                                                    <td>{{ $package->description }}</td>
                                                    @if (empty(auth()->user()->agency_id))
                                                        <td>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <a href="{{ route('agent.payment.stripe', ['id' => $package->id]) }}"
                                                                        class="btn btn-info text-white">Buy</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    @endif
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
    </div>
@endsection
<!-- @section('script')
    <script>
        $(document).ready(function() {
            $('#dbtable').DataTable();
        });
    </script>
@endsection -->
