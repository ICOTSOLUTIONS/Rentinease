@extends('agency.layouts.master')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header text-center justify-content-between">
                                <h4>Posting</h4>
                                <a href="{{ route('agentposting.create') }}"><button class="btn btn-success btn-hover">ADD
                                        Posting</button></a>
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
                                                <th>Purpose</th>
                                                <th>Property Type Place</th>
                                                <th>Building Name/No</th>
                                                <th>Building Age</th>
                                                <th>Price</th>
                                                <th>Price Per</th>
                                                {{-- <th>Coins of Agents</th> --}}
                                                <th>Furnishing</th>
                                                <th>City</th>
                                                <th>Area</th>
                                                <th>Amenities</th>
                                                <th>Facilities</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($postings as $posting)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>@if ($posting->purpose) @endif {{ $posting->purpose->name??'' }}</td>
                                                    <td>@if ($posting->propertyType) @endif {{ $posting->propertyType->name??'' }}</td>
                                                    <td>{{ $posting->building_name??'' }}</td>
                                                    <td>{{ $posting->building_age??'' }}</td>
                                                    <td>{{ $posting->price??'' }}</td>
                                                    <td>{{ $posting->price_per??'' }}</td>
                                                    <td>{{ $posting->furnishing??'' }}</td>
                                                    <td>{{ $posting->city??'' }}</td>
                                                    <td>{{ $posting->area??'' }}</td>
                                                    <td>{{ $posting->amenities??'' }}</td>
                                                    <td>{{ $posting->facilities??'' }}</td>
                                                    <td>{{ $posting->title??'' }}</td>
                                                    <td>{{ $posting->description??'' }}</td>
                                                    <td>
                                                        <div class="row">
                                                            {{-- <div class="col-md-4">
                                                                <a href="{{ route('agentposting.edit', ['agentposting' => $posting->id]) }}"
                                                                    class="btn btn-info text-white">Edit</a>
                                                            </div> --}}
                                                            {{-- <div class="col-md-4">
                                                                <a href="{{ route('agentposting.show', ['agentposting' => $posting->id]) }}"
                                                                    class="btn btn-info text-white">View</a>
                                                            </div> --}}
                                                            <div class="col-md-4">
                                                                <form
                                                                    action="{{ route('agentposting.destroy', ['agentposting' => $posting->id]) }}"
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
