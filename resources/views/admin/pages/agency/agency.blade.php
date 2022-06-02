@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center justify-content-between">
                        <h4>AGENCY</h4>
                        <a href="{{route('agency.create')}}"><button class="btn btn-success btn-hover">ADD AGENCY</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            #
                                        </th>
                                        <th>Task Name</th>
                                        <!-- <th>Progress</th> -->
                                        <!-- <th>Members</th> -->
                                        <th>Due Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if (!empty($agencies))
                                        @foreach ($agencies as $agency)
                                            <tr>
                                                <td>
                                                    1
                                                </td>
                                                <td>Create a mobile app</td>
                                                <td>2018-01-20</td>
                                                <td>
                                                    <div class="badge badge-success badge-shadow">Completed</div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('agency.edit',['agency'=>$agency->id]) }}" class="btn btn-info text-white">Edit</a>
                                                    <form action="{{ route('agency.destroy',['agency'=>$agency->id]) }}" method="POST">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                                                    </form>
                                                </td>
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