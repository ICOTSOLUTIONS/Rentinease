@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-body mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center justify-content-between">
                            <h4>Assistant Admin</h4>
                            @if (auth()->user()->roles->name == 'admin')
                                <a href="{{ route('assistant.create') }}"><button class="btn btn-success btn-hover">ADD
                                        ASSISTANT ADMIN</button></a>
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
                                        @forelse ($assistants as $assistant)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $assistant->fname }}</td>
                                                <td>{{ $assistant->lname }}</td>
                                                <td>{{ $assistant->email }}</td>
                                                <td>{{ $assistant->phone }}</td>
                                                <td>{{ $assistant->designation }}</td>
                                                <td>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <a href="{{ route('assistant.edit', ['assistant' => $assistant->id]) }}"
                                                                class="btn btn-info text-white">Edit</a>
                                                        </div>
                                                        @if ($assistant->id != 1 && $assistant->fname != 'superadmin')
                                                            <div class="col-md-6">
                                                                <form
                                                                    action="{{ route('assistant.destroy', ['assistant' => $assistant->id]) }}"
                                                                    method="POST">
                                                                    @method('DELETE')
                                                                    @csrf
                                                                    <button type="submit"
                                                                        class="btn btn-danger text-white">Delete</button>
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
