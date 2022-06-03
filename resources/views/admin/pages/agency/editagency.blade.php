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
                        <form action="{{ route('agency.update',['agency'=>$agency->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header justify-content-center">
                                <h4>Update Agency</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Agency Details</h6>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Company Name
                                                <input type="text" name="company_name" class="form-control"
                                                @if(old('company_name'))
                                                    value="{{ old('company_name') }}"
                                                @else
                                                value="{{ $agency->company_name }}" 
                                                @endif />
                                            </label>
                                            @error('company_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Owner Name
                                                <input type="text" name="owner_name" class="form-control"
                                                @if(old('owner_name'))
                                                    value="{{ old('owner_name') }}"
                                                @else
                                                value="{{ $agency->owner_name }}" 
                                                @endif />
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
                                                    <option
                                                    @if(old('company_type') == "RealState")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "RealState") 
                                                    value="RealState" selected
                                                    @endif >RealState</option>
                                                    <option
                                                    @if(old('company_type') == "Developer")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "Developer") 
                                                    value="Developer" selected
                                                    @endif >Developer</option>
                                                    <option
                                                    @if(old('company_type') == "Brokerage")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "Brokerage") 
                                                    value="Brokerage" selected
                                                    @endif >Brokerage</option>
                                                    <option
                                                    @if(old('company_type') == "Sales&Marketing")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "Sales&Marketing") 
                                                    value="Sales&Marketing" selected
                                                    @endif >Sales&Marketing</option>
                                                    <option
                                                    @if(old('company_type') == "Lending")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "Lending") 
                                                    value="Lending" selected
                                                    @endif >Lending</option>
                                                    <option
                                                    @if(old('company_type') == "Property-Management")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "Property-Management") 
                                                    value="Property-Management" selected
                                                    @endif >Property-Management</option>
                                                    <option
                                                    @if(old('company_type') == "Owner")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "Owner") 
                                                    value="Owner" selected
                                                    @endif >Owner</option>
                                                    <option
                                                    @if(old('company_type') == "Professional Services")
                                                        value="{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "Professional Services") 
                                                    value="Professional Services" selected
                                                    @endif >Professional Services</option>
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
                                                <input type="text" name="licence_no" class="form-control"
                                                @if(old('licence_no'))
                                                    value="{{ old('licence_no') }}"
                                                @else
                                                value="{{ $agency->licence_no }}" 
                                                @endif />
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
                                                <input type="text" name="permit_no" class="form-control"
                                                @if(old('permit_no'))
                                                    value="{{ old('permit_no') }}"
                                                @else
                                                value="{{ $agency->permit_no }}" 
                                                @endif />
                                            </label>
                                            @error('permit_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Rera no
                                                <input type="text" name="rera_no" class="form-control"
                                                @if(old('rera_no'))
                                                    value="{{ old('rera_no') }}"
                                                @else
                                                value="{{ $agency->rera_no }}" 
                                                @endif />
                                            </label>
                                            @error('rera_no')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Establishment Date:
                                                <input type="text" name="establishment_date" class="form-control"
                                                @if(old('establishment_date'))
                                                    value="{{ old('establishment_date') }}"
                                                @else
                                                value="{{ $agency->establishment_date }}" 
                                                @endif />
                                            </label>
                                            @error('establishment_date')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Licence Expire Date:
                                                <input type="text" name="licence_exp_date" class="form-control"
                                                @if(old('licence_exp_date'))
                                                    value="{{ old('licence_exp_date') }}"
                                                @else
                                                value="{{ $agency->licence_exp_date }}" 
                                                @endif />
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
                                                <input type="text" name="country" class="form-control"
                                                @if(old('country'))
                                                    value="{{ old('country') }}"
                                                @else
                                                value="{{ $agency->country }}" 
                                                @endif />
                                            </label>
                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>City
                                                <input type="text" name="city" class="form-control"
                                                @if(old('city'))
                                                    value="{{ old('city') }}"
                                                @else
                                                value="{{ $agency->city }}" 
                                                @endif />
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
                                                <input type="email" name="email" class="form-control"
                                                @if(old('email'))
                                                    value="{{ old('email') }}"
                                                @else
                                                value="{{ $agency->email }}" 
                                                @endif />
                                            </label>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone
                                                <input type="text" name="phone" class="form-control"
                                                @if(old('phone'))
                                                    value="{{ old('phone') }}"
                                                @else
                                                value="{{ $agency->phone }}" 
                                                @endif />
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
                                                <input type="text" name="mobile" class="form-control"
                                                @if(old('mobile'))
                                                    value="{{ old('mobile') }}"
                                                @else
                                                value="{{ $agency->mobile }}" 
                                                @endif />
                                            </label>
                                            @error('mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Website:(Optional)
                                                <input type="text" name="webiste" class="form-control"
                                                @if(old('webiste'))
                                                    value="{{ old('webiste') }}"
                                                @else
                                                value="{{ $agency->webiste }}" 
                                                @endif />
                                            </label>
                                            @error('webiste')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Street
                                                <input type="text" name="street" class="form-control"
                                                @if(old('street'))
                                                    value="{{ old('street') }}"
                                                @else
                                                value="{{ $agency->street }}" 
                                                @endif />
                                            </label>
                                            @error('street')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Office
                                                <input type="text" name="office" class="form-control"
                                                @if(old('office'))
                                                    value="{{ old('office') }}"
                                                @else
                                                value="{{ $agency->office }}" 
                                                @endif />
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
                                                <input type="text" name="building" class="form-control"
                                                @if(old('building'))
                                                    value="{{ old('building') }}"
                                                @else
                                                value="{{ $agency->building }}" 
                                                @endif />
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
                                                    <option
                                                    @if(old('access_of_agents') == '3')
                                                        value="{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents == "3") 
                                                    value="3" selected
                                                    @endif >Three(3)</option>
                                                    <option
                                                    @if(old('access_of_agents') == "6")
                                                        value="{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents == "6") 
                                                    value="6" selected
                                                    @endif >Six(6)</option>
                                                    <option
                                                    @if(old('access_of_agents') == "10")
                                                        value="{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents == "10") 
                                                    value="10" selected
                                                    @endif >Ten(10)</option>
                                                    
                                                    <option
                                                    @if(old('access_of_agents') == "custom")
                                                        value="{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents == "custom") 
                                                    value="custom" selected
                                                    @endif >Custom</option>
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
                                                <input type="checkbox"  name="custom" class="form-control"
                                                @if(old('custom'))
                                                    value="{{ old('custom') }}"
                                                @else
                                                value="{{ $agency->custom }}" 
                                                @endif />
                                            </label>
                                            @error('custom')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Autorised
                                                <input type="checkbox" name="authorized" class="form-control"
                                                @if(old('authorized'))
                                                    value="{{ old('authorized') }}"
                                                @else
                                                value="{{ $agency->authorized }}" 
                                                @endif />
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
                                                <input type="file" name="logo" class="form-control"
                                                @if(old('logo'))
                                                    value="{{ old('logo') }}"
                                                @else
                                                value="{{ $agency->logo }}" 
                                                @endif />
                                            </label>
                                            @error('logo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>RERA
                                                <input type="file" name="rera" class="form-control"
                                                @if(old('rera'))
                                                    value="{{ old('rera') }}"
                                                @else
                                                value="{{ $agency->rera }}" 
                                                @endif />
                                            </label>
                                            @error('rera')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Additional Documents
                                                <input type="file" name="additional_documents" class="form-control"
                                                @if(old('additional_documents'))
                                                    value="{{ old('additional_documents') }}"
                                                @else
                                                value="{{ $agency->additional_documents }}" 
                                                @endif />
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
                                                <input type="file" name="owner_eid" class="form-control"
                                                @if(old('owner_eid'))
                                                    value="{{ old('owner_eid') }}"
                                                @else
                                                value="{{ $agency->owner_eid }}" 
                                                @endif />
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
                                                    <input type="file" name="licence" class="form-control"
                                                    @if(old('licence'))
                                                    value="{{ old('licence') }}"
                                                @else
                                                value="{{ $agency->licence }}" 
                                                @endif />
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
                                                <input type="file" name="owner_visa" class="form-control"
                                                @if(old('owner_visa'))
                                                    value="{{ old('owner_visa') }}"
                                                @else
                                                value="{{ $agency->owner_visa }}" 
                                                @endif />
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
                                        <button type="submit" class="btn btn-success w-100">Update</button>
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
