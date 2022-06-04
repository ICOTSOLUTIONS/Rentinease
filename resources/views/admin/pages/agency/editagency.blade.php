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
                            @method('PUT')
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Company Type
                                                <select name = "company_type" class="form-control w-110">
                                                    <option value = "">Select Company</option>
                                                    <option
                                                    @if(old('company_type') == "realState")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "realState") 
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "realState"
                                                    @endif >RealState</option>
                                                    <option
                                                    @if(old('company_type') == "developer")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "developer") 
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "developer"
                                                    @endif >Developer</option>
                                                    <option
                                                    @if(old('company_type') == "brokerage")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "brokerage") 
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "brokerage"
                                                    @endif >Brokerage</option>
                                                    <option
                                                    @if(old('company_type') == "sales_marketing")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "sales_marketing")
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "sales_marketing"
                                                    @endif >Sales&Marketing</option>
                                                    <option
                                                    @if(old('company_type') == "lending")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "lending") 
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "lending"
                                                    @endif >Lending</option>
                                                    <option
                                                    @if(old('company_type') == "property_management")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "property_management")
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "property_management"
                                                    @endif >Property-Management</option>
                                                    <option
                                                    @if(old('company_type') == "owner")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "owner") 
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "owner"
                                                    @endif >Owner</option>
                                                    <option
                                                    @if(old('company_type') == "professional_services")
                                                        value = "{{ old('company_type') }}" selected
                                                    @elseif($agency->company_type == "professional_services")
                                                        value = "{{ $agency->company_type }}" selected
                                                    @else
                                                        value = "professional_services"
                                                    @endif >Professional Services</option>
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
                                                <input type="text" name="licence_no" class="form-control"
                                                @if(old('licence_no'))
                                                    value="{{ old('licence_no') }}"
                                                @else
                                                value="{{ $agency->licence_no }}" 
                                                @endif />
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
                                                <input type="text" name="permit_no" class="form-control"
                                                @if(old('permit_no'))
                                                    value="{{ old('permit_no') }}"
                                                @else
                                                value="{{ $agency->permit_no }}" 
                                                @endif />
                                            </label>
                                            @error('permit_no')
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <input type="email" name="email" class="form-control"
                                                @if(old('email'))
                                                    value="{{ old('email') }}"
                                                @else
                                                value="{{ $agency->email }}" 
                                                @endif />
                                            </label>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Access of Agents
                                                <select name="access_of_agents" id="access_agent" onchange="customs()" class="form-control w-178">
                                                    <option value="">Select Agents</option>
                                                    <option
                                                    @if(old('access_of_agents') == '3') 
                                                        value = "{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents == "3")
                                                         value = "{{ $agency->access_of_agents }}" selected
                                                    @else
                                                        value="3"
                                                    @endif >Three(3)</option>
                                                    <option
                                                    @if(old('access_of_agents') == "6")
                                                        value = "{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents == "6") 
                                                        value = "{{ $agency->access_of_agents }}" selected
                                                    @else
                                                        value="6"
                                                    @endif >Six(6)</option>
                                                    <option
                                                    @if(old('access_of_agents') == "10")
                                                        value = "{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents == "10") 
                                                        value = "{{ $agency->access_of_agents }}" selected
                                                    @else
                                                        value="10"
                                                    @endif >Ten(10)</option>
                                                    <option
                                                    @if(old('access_of_agents') == "custom")
                                                        value = "{{ old('access_of_agents') }}" selected
                                                    @elseif($agency->access_of_agents != "3" && $agency->access_of_agents != "6" && $agency->access_of_agents != "10" ) 
                                                        value = "custom" selected
                                                    @else
                                                        value="custom"
                                                    @endif >Custom</option>
                                                </select>
                                            </label>
                                        </div>
                                        @error('access_of_agents')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-3" id="custom">
                                        <div class="form-group">
                                            <label>Custom
                                                <input type="number" name="custom" class="form-control"
                                                @if(old('custom'))
                                                    value="{{ old('custom') }}"
                                                @else
                                                    value="{{ $agency->access_of_agents }}" 
                                                @endif />
                                            </label>
                                            @error('custom')
                                                <div class="text-danger">{{ $message }}</div>
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
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>LOGO
                                                <input type="file" name="logo" class="form-control" value="{{ $agency->logo }}"/>
                                            </label>
                                            @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>RERA
                                                <input type="file" name="rera" class="form-control" value="{{ $agency->rera }}"/>
                                            </label>
                                            @error('rera')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Additional Documents
                                                <input type="file" name="additional_documents" class="form-control" value="{{ $agency->additional_documents }}"/>
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
                                                <input type="file" name="owner_eid" class="form-control" value="{{ $agency->owner_eid }}"/>
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
                                                    <input type="file" name="licence" class="form-control" value="{{ $agency->licence }}"/>
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
                                                <input type="file" name="owner_visa" class="form-control" value="{{ $agency->owner_visa }}"/>
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
            customs();
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
