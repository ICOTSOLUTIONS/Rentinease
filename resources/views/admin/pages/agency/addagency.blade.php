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
                                            <input type="text" name="company_name" value="{{ old('company_name') }}" class="form-control">
                                        </label>
                                        @error('company_name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Owner Name
                                            <input type="text" name="owner_name" value="{{ old('owner_name') }}" class="form-control">
                                        </label>
                                        @error('owner_name')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Company Type
                                            <select name="company_type" id="" class="form-control w-110">
                                                <option value="">Select Company</option>
                                                <option value="realstate" @if (old('company_type')=='RealState' ) selected @endif>RealState</option>
                                                <option value="developer" @if (old('company_type')=='Developer' ) selected @endif>Developer</option>
                                                <option value="brokerage" @if (old('company_type')=='Brokerage' ) selected @endif>Brokerage</option>
                                                <option value="sales_marketing" @if (old('company_type')=='Sales&Marketing' ) selected @endif>Sales&Marketing</option>
                                                <option value="lending" @if (old('company_type')=='Lending' ) selected @endif>Lending</option>
                                                <option value="property_management" @if (old('company_type')=='Property-Management' ) selected @endif>Property-Management</option>
                                                <option value="owner" @if (old('company_type')=='Owner' ) selected @endif>Owner</option>
                                                <option value="professional_services" @if (old('company_type')=='Professional Services' ) selected @endif>Professional Services</option>
                                            </select>
                                        </label>
                                        @error('company_type')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Licence no
                                            <input type="text" name="licence_no" value="{{ old('licence_no') }}" class="form-control">
                                        </label>
                                        @error('licence_no')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Permit no
                                            <input type="text" name="permit_no" value="{{ old('permit_no') }}" class="form-control">
                                        </label>
                                        @error('permit_no')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Rera no
                                            <input type="text" name="rera_no" value="{{ old('rera_no') }}" class="form-control">
                                        </label>
                                        @error('rera_no')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Establishment Date:
                                            <input type="text" name="establishment_date" value="{{ old('establishment_date') }}" class="form-control">
                                        </label>
                                        @error('establishment_date')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Licence Expire Date:
                                            <input type="text" name="licence_exp_date" value="{{ old('licence_exp_date') }}" class="form-control">
                                        </label>
                                        @error('licence_exp_date')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Country
                                            <input type="text" name="country" value="{{ old('country') }}" class="form-control">
                                        </label>
                                        @error('country')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>City
                                            <input type="text" name="city" value="{{ old('city') }}" class="form-control">
                                        </label>
                                        @error('city')
                                        <div class="text-danger">{{ $message }}</div>
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
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                        </label>
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Phone
                                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                                        </label>
                                        @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Mobile
                                            <input type="text" name="mobile" value="{{ old('mobile') }}" class="form-control">
                                        </label>
                                        @error('mobile')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Website:(Optional)
                                            <input type="text" name="webiste" value="{{ old('webiste') }}" class="form-control">
                                        </label>
                                        @error('webiste')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Street
                                            <input type="text" name="street" value="{{ old('street') }}" class="form-control">
                                        </label>
                                        @error('street')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Office
                                            <input type="text" name="office" value="{{ old('office') }}" class="form-control">
                                        </label>
                                        @error('office')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Building
                                            <input type="text" name="building" value="{{ old('building') }}" class="form-control">
                                        </label>
                                        @error('building')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Access of Agents
                                            <select name="access_of_agents" id="access_agent" onclick="customs()" class="form-control w-178">
                                                <option value="">Select Agents</option>
                                                <option value="3" @if (old('access_of_agents')=='3' ) selected @endif>Three(3)</option>
                                                <option value="6" @if (old('access_of_agents')=='6' ) selected @endif>Six (6)</option>
                                                <option value="10" @if (old('access_of_agents')=='10' ) selected @endif>Ten (10)</option>
                                                <option value="custom" @if (old('access_of_agents')=='custom' ) selected @endif>Custom</option>
                                            </select>
                                        </label>
                                        @error('access_of_agents')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3" id="custom">
                                    <div class="form-group">
                                        <label>Custom
                                            <input type="number" name="custom" value="{{ old('custom') }}" class="form-control">
                                        </label>
                                        @error('custom')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Autorised
                                            <input type="checkbox" name="authorized" value="{{ old('authorized') }}" class="form-control">
                                        </label>
                                        @error('authorized')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>LOGO
                                            <input type="file" name="logo" value="{{ old('logo') }}" class="form-control">
                                        </label>
                                        @error('logo')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>RERA
                                            <input type="file" name="rera" value="{{ old('rera') }}" class="form-control">
                                        </label>
                                        @error('rera')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Additional Documents
                                            <input type="file" name="additional_documents" value="{{ old('additional_documents') }}" class="form-control">
                                        </label>
                                        @error('additional_documents')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Owner EID
                                            <input type="file" name="owner_eid" value="{{ old('owner_eid') }}" class="form-control">
                                        </label>
                                        @error('owner_eid')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right">
                                        <div class="form-group">
                                            <label>Licence
                                                <input type="file" name="licence" value="{{ old('licence') }}" class="form-control">
                                            </label>
                                            @error('licence')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Owner Visa
                                            <input type="file" name="owner_visa" value="{{ old('owner_visa') }}" class="form-control">
                                        </label>
                                        @error('owner_visa')
                                        <div class="text-danger">{{ $message }}</div>
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
    $(document).ready(function() {
        customs();
    });

    function customs() {
        var custom = $('#access_agent').val();
        if (custom == "custom") {
            $('#custom').show();
        } else {
            $('#custom').hide();
        }
    }
</script>
@endsection