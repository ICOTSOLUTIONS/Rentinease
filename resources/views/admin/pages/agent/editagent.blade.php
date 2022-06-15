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
            width: 145%;

        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <form action="{{ route('agent.update', ['agent' => $agent->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header justify-content-center">
                                <h4>Update Agent</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Agent Details</h6>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Company Name
                                                <input type="text" name="company_name" class="form-control"
                                                    @if (old('company_name')) value="{{ old('company_name') }}"
                                            @else
                                            value="{{ $agent->company_name }}" @endif />
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
                                                    @if (old('owner_name')) value="{{ old('owner_name') }}"
                                            @else
                                            value="{{ $agent->owner_name }}" @endif />
                                            </label>
                                            @error('owner_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Agent Type
                                                <select name="agent_type" class="form-control w-110">
                                                    <option value="">Select Company</option>
                                                    <option value="brokerage"
                                                        @if (old('agent_type') == 'brokerage' || $agent->type == 'brokerage') value = "{{ $agent->type }}" selected
                                                    @else
                                                        value = "{{ $agent->type }}" @endif>
                                                        Brokerage</option>
                                                    <option value="sales_marketing"
                                                        @if (old('agent_type') == 'sales_marketing' || $agent->type == 'sales_marketing') value = "{{ $agent->type }}" selected
                                                        @else
                                                        value = "{{ $agent->type }}" @endif>
                                                        Sales&Marketing</option>
                                                    <option value="professional_services"
                                                        @if (old('agent_type') == 'professional_services' || $agent->type == 'professional_services') value = "{{ $agent->type }}" selected
                                                    @else
                                                        value = "{{ $agent->type }}" @endif>
                                                        Professional Services</option>
                                                </select>
                                            </label>
                                            @error('agent_type')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Licence no
                                                <input type="text" name="licence_no" class="form-control"
                                                    @if (old('licence_no')) value="{{ old('licence_no') }}"
                                            @else
                                            value="{{ $agent->licence_no }}" @endif />
                                            </label>
                                            @error('licence_no')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- </div>
                            <div class="row"> --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Permit no
                                                <input type="text" name="permit_no" class="form-control"
                                                    @if (old('permit_no')) value="{{ old('permit_no') }}"
                                            @else
                                            value="{{ $agent->permit_no }}" @endif />
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
                                                    @if (old('rera_no')) value="{{ old('rera_no') }}"
                                            @else
                                            value="{{ $agent->rera_no }}" @endif />
                                            </label>
                                            @error('rera_no')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Establishment Date:
                                                <input type="date" name="establishment_date" class="form-control "
                                                    @if (old('establishment_date')) value="{{ old('establishment_date') }}"
                                            @else
                                            value="{{ $agent->establishment_date }}" @endif />
                                            </label>
                                            @error('establishment_date')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Licence Expire Date:
                                                <input type="date" name="licence_exp_date" class="form-control"
                                                    @if (old('licence_exp_date')) value="{{ old('licence_exp_date') }}"
                                            @else
                                            value="{{ $agent->licence_exp_date }}" @endif />
                                            </label>
                                            @error('licence_exp_date')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- </div>
                            <div class="row"> --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Country
                                                <input type="text" name="country" class="form-control"
                                                    @if (old('country')) value="{{ old('country') }}"
                                            @else
                                            value="{{ $agent->country }}" @endif />
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
                                                    @if (old('city')) value="{{ old('city') }}"
                                            @else
                                            value="{{ $agent->city }}" @endif />
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
                                                <input type="text" name="email" class="form-control"
                                                    @if (old('email')) value="{{ old('email') }}"
                                            @else
                                            value="{{ $agent->email }}" @endif />
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
                                                    @if (old('phone')) value="{{ old('phone') }}"
                                            @else
                                            value="{{ $agent->email }}" @endif />
                                            </label>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- </div>
                            <div class="row"> --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mobile
                                                <input type="text" name="mobile" class="form-control"
                                                    @if (old('mobile')) value="{{ old('mobile') }}"
                                            @else
                                            value="{{ $agent->mobile }}" @endif />
                                            </label>
                                            @error('mobile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Website:(Optional)
                                                <input type="text" name="website" class="form-control"
                                                    @if (old('website')) value="{{ old('website') }}"
                                            @else
                                            value="{{ $agent->website }}" @endif />
                                            </label>
                                            @error('website')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Street
                                                <input type="text" name="street" class="form-control"
                                                    @if (old('street')) value="{{ old('street') }}"
                                            @else
                                            value="{{ $agent->street }}" @endif />
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
                                                    @if (old('office')) value="{{ old('office') }}"
                                            @else
                                            value="{{ $agent->office }}" @endif />
                                            </label>
                                            @error('office')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- </div>
                            <div class="row"> --}}
                                    {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label> Agencies
                                            <select name="agency_id" id="" class="form-control w-178">
                                                <option value="">Select Agencies</option>
                                                @foreach ($agencies as $agency)
                                                    <option value="{{ $agency->id }}" {{$agent->agency_id == $agency->id  ? 'selected' : ''}}>
                                                    {{ $agent->owner_name}}</option>
                                                @endforeach
                                            </select>
                                        </label>
                                    </div>
                                </div> --}}
                                    {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Password
                                            <input type="password" name="password" class="form-control" value="{{ $agent->password }}" />
                                        </label>
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> --}}
                                    {{-- <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Coins
                                            <input type="text" name="coins_of_agents" class="form-control"
                                            @if (old('coins_of_agents'))
                                                value="{{ old('coins_of_agents') }}"
                                            @else
                                            value="{{ $agent->coins }}" 
                                            @endif />
                                        </label>
                                        @error('coins_of_agents')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div> --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Packages
                                                <select name="package" id="package" class="form-control w-178">
                                                    <option value="">Select Packages</option>
                                                    @forelse ($packages as $package)
                                                        @if (old('package') == $package->id)
                                                            <option value="{{ $package->id }}" selected>
                                                                {{ $package->name }}
                                                            </option>
                                                        @else
                                                            <option value="{{ $package->id }}" selected>
                                                                {{ $package->name }}
                                                            </option>
                                                        @endif
                                                    @empty
                                                        <option value="">No Packages</option>
                                                    @endforelse
                                                </select>
                                            </label>
                                            @error('package')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Building
                                                <input type="text" name="building" class="form-control"
                                                    @if (old('building')) value="{{ old('building') }}"
                                            @else
                                            value="{{ $agent->building }}" @endif />
                                            </label>
                                            @error('building')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group justify-content-center">
                                            <label class="">Authorized
                                                <br>
                                                <input type="checkbox" name="authorized"
                                                    @if (!empty($agent->authorized)) value="{{ $agent->authrized }}" checked
                                                @else
                                                    value='authorized' @endif>
                                            </label>
                                        </div>
                                    </div>
                                    {{-- </div>
                            <div class="row"> --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Agent EID
                                                <input type="file" name="agent_eid" value="{{ $agent->agent_eid }}"
                                                    class="form-control">
                                            </label>
                                            @error('agent_eid')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Licence
                                                <input type="file" name="licence" value="{{ $agent->licence }}"
                                                    class="form-control">
                                            </label>
                                            @error('licence')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Agent Visa
                                                <input type="file" name="agent_visa" value="{{ $agent->agent_visa }}"
                                                    class="form-control">
                                            </label>
                                            @error('agent_visa')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- </div>
                            <div class="row"> --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>RERA
                                                <input type="file" name="rera" value="{{ $agent->rera }}"
                                                    class="form-control">
                                            </label>
                                            @error('rera')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Additional Documents
                                                <input type="file" name="additional_documents"
                                                    value="{{ $agent->additional_documents }}" class="form-control">
                                            </label>
                                            @error('additional_documents')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Agent Photo
                                                <input type="file" name="logo" value="{{ $agent->logo }}"
                                                    class="form-control">
                                            </label>
                                            @error('logo')
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
