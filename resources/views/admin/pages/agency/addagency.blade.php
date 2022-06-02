@extends('admin.layouts.master')

@section('content')
<style>
    .input-group-text,
    select.form-control:not([size]):not([multiple]),
    .form-control:not(.form-control-sm):not(.form-control-lg) {
        font-size: 14px;
        background-color: white;
        padding: 0 15px;
        height: 28px;
    }

    .w-110 {
        width: 110%;

    }

    .w-178 {
        width: 178%;

    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form>
                        <div class="card-header justify-content-center">
                            <h4>Add Agency</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h6 class="text-success">Enter Your Agency Details</h6>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Company Name
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Owner Name
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Company Type
                                            <select name="" id="" class="form-control w-110">
                                                <option value="" selected>Select Company</option>
                                                <option value="">RealState</option>
                                                <option value="">Developer</option>
                                                <option value="">Brokerage</option>
                                                <option value="">Sales&Marketing</option>
                                                <option value="">Lending</option>
                                                <option value="">Property-Management</option>
                                                <option value="">Owner</option>
                                                <option value="">Professional Services</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Licence no
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Permit no
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Permit no
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Rera no
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Establishment Date:
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Licence Expire Date:
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Country
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>City
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>

                                </div>

                                <!-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label>City
                                            <select name="" id="" class="form-control ">
                                                <option value="" selected>Select City</option>
                                                <option value="">lorem ipsum</option>
                                                <option value="">lorem ipsum</option>
                                                <option value="">lorem ipsum</option>
                                                <option value="">lorem ipsum</option>
                                                <option value="">lorem ipsum</option>
                                                <option value="">lorem ipsum</option>
                                                <option value="">lorem ipsum</option>
                                                <option value="">lorem ipsum</option>
                                            </select>
                                        </label>
                                    </div>
                                </div> -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Email
                                            <input type="email" class="form-control">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Phone
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Website:(Optional)
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Street
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Office
                                            <input type="text" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Owner EID
                                            <input type="file" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="float-right">
                                        <div class="form-group">
                                            <label>Licence
                                                <input type="file" class="form-control">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Owner Visa
                                            <input type="file" class="form-control">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>RERA
                                            <input type="file" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Additional Documents
                                            <input type="file" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Autorised
                                            <input type="checkbox" class="form-control">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Access of Agents
                                            <select name="" id="" class="form-control w-178">
                                                <option value="" selected>Select Agents</option>
                                                <option value="">Three(3)</option>
                                                <option value="">Six (6)</option>
                                                <option value="">Ten (10)</option>
                                                <option value="">Custom</option>
                                            </select>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-2">
                                    <a href=""><button class="btn btn-success w-100">Save</button></a>
                                </div>
                                <div class="col-md-14">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection