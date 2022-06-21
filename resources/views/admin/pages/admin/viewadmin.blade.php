@extends('admin.layouts.master')
@section('content')
<style>
    .width {
        width: 35%;
        border-radius: 2rem;
    }
</style>
<div class="container-fluid bootstrap snippets bootdeys">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4">
                    <div class="card design">
                        <div class="card-header justify-content-center">
                            <h4>Profile Details</h4>
                        </div>
                        <div class="text-center p-3">
                            <img src="{{asset('assets/img/bgimg.jpeg')}}" alt="img" class="width">
                        </div>
                        <div class="card-footer p-3 ">
                            <div class="row mt-4">
                                <h5>Personal Details</h5>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>

                                <div class="col-md-3"><label for="">lorem</label></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card design">
                        <div class="card-header justify-content-center">
                            <h4>
                                VIEW ADMIN
                            </h4>
                        </div>
                        <div class="card-body">

                            <div class="row mt-4">
                                <h5>Account Details</h5>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                            </div>
                            <div class="row mt-4">
                                <h5>lorem Details</h5>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                            </div>
                            <div class="row mt-4">
                                <h5>lorem Details</h5>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                                <div class="col-md-3"><label for="">lorem</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection