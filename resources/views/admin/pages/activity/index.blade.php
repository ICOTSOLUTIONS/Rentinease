@extends('admin.layouts.master')
@section('content')
    <section class="section">
        <div class="section-body mt-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-center justify-content-between">
                            <h4>Activity Log</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>Title</th>
                                            <th>Logs</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($activities as $activity)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $activity->title }}</td>
                                                <td>{{ $activity->logs }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="4">No data!</td>
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
