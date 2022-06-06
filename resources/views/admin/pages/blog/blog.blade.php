@extends('admin.layouts.master')
@section('content')
<section class="section">
    <div class="section-body mt-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header text-center justify-content-between">
                        <h4>BLOG</h4>
                        <a href=""><button class="btn btn-success btn-hover">ADD BLOG</button></a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Fisrt Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Mobile</th>
                                        <th>Country</th>
                                        <th>Office</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>hello world</td>
                                        <td>hello world</td>
                                        <td>hello world</td>
                                        <td>hello world</td>
                                        <td>hello world</td>
                                        <td>hello world</td>
                                        <td>hello world</td>
                                        <td>hello world</td>
                                        <td>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <a href="" class="btn btn-info text-white">Edit</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <form action="" method="POST">

                                                        <button type="submit" class="btn btn-danger text-white">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
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