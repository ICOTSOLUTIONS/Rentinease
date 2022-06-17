@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card design">
                    <div class="card-header text-center justify-content-between">
                        <h4>Payment</h4>
                        <button class="btn btn-success btn-hover">ADD PAYMENT</button>
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
                                    <tr>
                                        <td>
                                            1
                                        </td>
                                        <td>Create a mobile app</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                        </td> -->
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            2
                                        </td>
                                        <td>Redesign homepage</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-3.png" width="35">
                                            <img alt="image" src="assets/img/users/user-4.png" width="35"> -->
                                        <!-- </td> -->
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            3
                                        </td>
                                        <td>Backup database</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-2.png" width="35">
                                        </td> -->
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            4
                                        </td>
                                        <td>Input data</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-90"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-2.png" width="35">
                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                            <img alt="image" src="assets/img/users/user-4.png" width="35"> -->
                                        <!-- <img alt="image" src="assets/img/users/user-1.png" width="35">
                                        </td> -->
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            5
                                        </td>
                                        <td>Create a mobile app</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                        </td> -->
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            6
                                        </td>
                                        <td>Redesign homepage</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-3.png" width="35">
                                            <img alt="image" src="assets/img/users/user-4.png" width="35"> -->
                                        <!-- </td> -->
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            7
                                        </td>
                                        <td>Backup database</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-2.png" width="35">
                                        </td> -->
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            8
                                        </td>
                                        <td>Input data</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-90"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-2.png" width="35">
                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                            <img alt="image" src="assets/img/users/user-4.png" width="35"> -->
                                        <!-- <img alt="image" src="assets/img/users/user-1.png" width="35">
                                        </td> -->
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            9
                                        </td>
                                        <td>Create a mobile app</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-40">
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                        </td> -->
                                        <td>2018-01-20</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            10
                                        </td>
                                        <td>Redesign homepage</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar width-per-60"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-3.png" width="35">
                                            <img alt="image" src="assets/img/users/user-4.png" width="35"> -->
                                        <!-- </td> -->
                                        <td>2018-04-10</td>
                                        <td>
                                            <div class="badge badge-info badge-shadow">Todo</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            11
                                        </td>
                                        <td>Backup database</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-warning width-per-70"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-1.png" width="35">
                                            <img alt="image" src="assets/img/users/user-2.png" width="35">
                                        </td> -->
                                        <td>2018-01-29</td>
                                        <td>
                                            <div class="badge badge-warning badge-shadow">In Progress</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            12
                                        </td>
                                        <td>Input data</td>
                                        <!-- <td class="align-middle">
                                            <div class="progress progress-xs">
                                                <div class="progress-bar bg-success width-per-90"></div>
                                            </div>
                                        </td>
                                        <td>
                                            <img alt="image" src="assets/img/users/user-2.png" width="35">
                                            <img alt="image" src="assets/img/users/user-5.png" width="35">
                                            <img alt="image" src="assets/img/users/user-4.png" width="35"> -->
                                        <!-- <img alt="image" src="assets/img/users/user-1.png" width="35">
                                        </td> -->
                                        <td>2018-01-16</td>
                                        <td>
                                            <div class="badge badge-success badge-shadow">Completed</div>
                                        </td>
                                        <td>
                                            <a href="#" class="btn btn-info text-white">Edit</a>
                                            <a href="#" class="btn btn-danger text-white">Delete</a>
                                        </td>
                                    </tr>
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