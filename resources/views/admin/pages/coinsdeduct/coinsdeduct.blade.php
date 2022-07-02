@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-body mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card design">
                        <div class="card-header text-center justify-content-between">
                            <h4>Coins Deduction</h4>
                            @if (auth()->user()->roles->name != 'subadmin')
                                <a href="{{ route('coinsdeduct.create') }}"><button class="btn btn-success btn-hover">ADD
                                    Coins Deduction</button></a>
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
                                            <th>Name</th>
                                            <th>Coins</th>
                                            {{-- <th>Duration</th> --}}
                                            <th>Description</th>
                                            @if (auth()->user()->roles->name != 'subadmin')
                                                <th>Action</th>
                                            @endif
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($coins_deducts as $coins_deduct)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $coins_deduct->name }}</td>
                                                <td>{{ $coins_deduct->coins_deduct }}</td>
                                                {{-- <td>{{ $coins_deduct->duration }}</td> --}}
                                                <td>{{ $coins_deduct->description }}</td>
                                                @if (auth()->user()->roles->name != 'subadmin')
                                                    <td>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="{{ route('coinsdeduct.edit', ['coinsdeduct' => $coins_deduct->id]) }}"
                                                                    class="btn btn-info text-white">Edit</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <form
                                                                    action="{{ route('coinsdeduct.destroy', ['coinsdeduct' => $coins_deduct->id]) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-white">Delete</button>
                                                                </form>
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
@endsection
<!-- @section('script')
    <script>
        $(document).ready(function() {
            $('#dbtable').DataTable();
        });
    </script>
@endsection -->
