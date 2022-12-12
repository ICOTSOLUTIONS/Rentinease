@extends('agency.layouts.master')
@section('content')
<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
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
                                        <th>Name</th>
                                        <th>Coins</th>
                                        <th>Duration Time</th>
                                        <th>Duration Period</th>
                                        <th>Description</th>
                                        <th>Action</th>
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
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="{{ route('payment.stripe', ['id' => $package->id]) }}" class="btn btn-info text-white">Buy</a>
                                                </div>
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