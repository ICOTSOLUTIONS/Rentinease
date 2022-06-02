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
                        <form action="{{ route('agency.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header justify-content-center">
                                <h4>Add Agency</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Agency Details</h6>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Company Name
                                                <input type="text" name="company_name" class="form-control">
                                            </label>
                                            @error('company_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Owner Name
                                                <input type="text" name="owner_name" class="form-control">
                                            </label>
                                            @error('owner_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Company Type
                                                <select name="company_type" id="" class="form-control w-110">
                                                    <option value="" selected>Select Company</option>
                                                    <option value="RealState">RealState</option>
                                                    <option value="Developer">Developer</option>
                                                    <option value="Brokerage">Brokerage</option>
                                                    <option value="Sales&Marketing">Sales&Marketing</option>
                                                    <option value="Lending">Lending</option>
                                                    <option value="Property-Management">Property-Management</option>
                                                    <option value="Owner">Owner</option>
                                                    <option value="Professional Services">Professional Services</option>
                                                </select>
                                            </label>
                                            @error('company_type')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Licence no
                                                <input type="text" name="licence_no" class="form-control">
                                            </label>
                                            @error('licence_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Permit no
                                                <input type="text" name="permit_no" class="form-control">
                                            </label>
                                            @error('permit_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Rera no
                                                <input type="text" name="rera_no" class="form-control">
                                            </label>
                                            @error('rera_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Establishment Date:
                                                <input type="text" name="establishment_date" class="form-control">
                                            </label>
                                            @error('establishment_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Licence Expire Date:
                                                <input type="text" name="licence_exp_date" class="form-control">
                                            </label>
                                            @error('licence_exp_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Country
                                                <input type="text" name="country" class="form-control">
                                            </label>
                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>City
                                                <input type="text" name="city" class="form-control">
                                            </label>
                                            @error('city')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
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
                                                <input type="email" name="email" class="form-control">
                                            </label>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone
                                                <input type="text" name="phone" class="form-control">
                                            </label>
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mobile
                                                <input type="text" name="mobile" class="form-control">
                                            </label>
                                            @error('mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Website:(Optional)
                                                <input type="text" name="webiste" class="form-control">
                                            </label>
                                            @error('webiste')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Street
                                                <input type="text" name="street" class="form-control">
                                            </label>
                                            @error('street')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Office
                                                <input type="text" name="office" class="form-control">
                                            </label>
                                            @error('office')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Building
                                                <input type="text" name="building" class="form-control">
                                            </label>
                                            @error('building')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Access of Agents
                                                <select name="access_of_agents" id="access_agent" onclick="customs()" class="form-control w-178">
                                                    <option value="" selected>Select Agents</option>
                                                    <option value="3">Three(3)</option>
                                                    <option value="6">Six (6)</option>
                                                    <option value="10">Ten (10)</option>
                                                    <option value="custom">Custom</option>
                                                </select>
                                            </label>
                                            @error('access_of_agents')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3" id="custom">
                                        <div class="form-group">
                                            <label>Custom
                                                <input type="checkbox"  name="custom" class="form-control">
                                            </label>
                                            @error('custom')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Autorised
                                                <input type="checkbox" name="authorized" class="form-control">
                                            </label>
                                            @error('authorized')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>LOGO
                                                <input type="file" name="logo" class="form-control">
                                            </label>
                                            @error('logo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>RERA
                                                <input type="file" name="rera" class="form-control">
                                            </label>
                                            @error('rera')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Additional Documents
                                                <input type="file" name="additional_documents" class="form-control">
                                            </label>
                                            @error('additional_documents')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Owner EID
                                                <input type="file" name="owner_eid" class="form-control">
                                            </label>
                                            @error('owner_eid')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="float-right">
                                            <div class="form-group">
                                                <label>Licence
                                                    <input type="file" name="licence" class="form-control">
                                                </label>
                                                @error('licence')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Owner Visa
                                                <input type="file" name="owner_visa" class="form-control">
                                            </label>
                                            @error('owner_visa')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-9">
                                    </div>
                                    <div class="col-md-3">
                                        <button type="submit" class="btn btn-success w-100">Save</button>
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
@section('script')
    <script>
        $(document).ready(function(){
            $('#custom').hide();
        });
        function customs() {
            var custom = $('#access_agent').val();
            if(custom == "custom"){
                $('#custom').show();
            }else{
                $('#custom').hide();
            }
        }
    </script>
@endsection
