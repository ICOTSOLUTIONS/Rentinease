@extends('agency.layouts.master')

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
            width: 105% !important;

        }

        .w-178 {
            width: 170% !important;

        }

        .date {
            width: 125%;

        }

        .input-group input {
            width: 140px !important;
        }

        .dark .input-group-text {
            background-color: #c9c9c9;
            color: #040404;
        }
    </style>
    <div class="main-content">

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card design">
                            <form action="{{ route('agentposting.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="card-header justify-content-center">
                                    <h4 class="text-success">Enter Your Posting Details</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Company Name
                                                    <input type="text" name="company_name"
                                                        value="{{ old('company_name') }}" class="form-control">
                                                </label>
                                                @error('company_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Owner Name
                                                    <input type="text" name="owner_name" value="{{ old('owner_name') }}"
                                                        class="form-control">
                                                </label>
                                                @error('owner_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Agent Type
                                                    <select name="agent_type" id="" class="form-control w-110">
                                                        <option value="">Select Agent</option>
                                                        <option value="brokerage"
                                                            @if (old('company_type') == 'Brokerage') selected @endif>Brokerage
                                                        </option>
                                                        <option value="sales_marketing"
                                                            @if (old('company_type') == 'Sales&Marketing') selected @endif>
                                                            Sales&Marketing
                                                        </option>
                                                        <option value="professional_services"
                                                            @if (old('company_type') == 'Professional Services') selected @endif>Professional
                                                            Services</option>
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
                                                    <input type="text" name="licence_no" value="{{ old('licence_no') }}"
                                                        class="form-control">
                                                </label>
                                                @error('licence_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Permit no
                                                    <input type="text" name="permit_no" value="{{ old('permit_no') }}"
                                                        class="form-control">
                                                </label>
                                                @error('permit_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Rera no
                                                    <input type="text" name="rera_no" value="{{ old('rera_no') }}"
                                                        class="form-control">
                                                </label>
                                                @error('rera_no')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Establishment Date:
                                                    <input type="date" name="establishment_date"
                                                        value="{{ old('establishment_date') }}" class="form-control date">
                                                </label>
                                                @error('establishment_date')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Licence Expire Date:
                                                    <input type="date" name="licence_exp_date"
                                                        value="{{ old('licence_exp_date') }}" class="form-control date">
                                                </label>
                                                @error('licence_exp_date')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Country
                                                    <input type="text" name="country" value="UAE" class="form-control"
                                                        readonly>
                                                </label>
                                                @error('country')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>City
                                                    <select name="city" class="form-control w-178">
                                                        <option value="">Select City</option>
                                                        <option value="Dubai"
                                                            @if (old('city') == 'Dubai') selected @endif>Dubai</option>
                                                        <option value="Sharjah"
                                                            @if (old('city') == 'Sharjah') selected @endif>Sharjah
                                                        </option>
                                                    </select>
                                                </label>
                                                @error('city')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Email
                                                    <input type="email" name="email" value="{{ old('email') }}"
                                                        class="form-control">
                                                </label>
                                                @error('email')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <label>Phone
                                                <div class="input-group form-group">
                                                    <span class="input-group-text" id="addon-wrapping">+971</span>
                                                    <input type="hidden" name="p_code" value="+971">
                                                    <input type="number" name="phone" value="{{ old('phone') }}"
                                                        class="form-control">
                                                </div>
                                            </label>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label>Mobile
                                                <div class="input-group form-group">
                                                    <span class="input-group-text" id="addon-wrapping">+971</span>
                                                    <input type="hidden" name="m_code" value="+971">
                                                    <input type="number" name="mobile" value="{{ old('mobile') }}"
                                                        class="form-control">
                                                </div>
                                            </label>
                                            @error('mobile')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Website:(Optional)
                                                    <input type="text" name="website" value="{{ old('website') }}"
                                                        class="form-control">
                                                </label>
                                                @error('website')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Street
                                                    <input type="text" name="street" value="{{ old('street') }}"
                                                        class="form-control">
                                                </label>
                                                @error('street')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Office
                                                    <input type="text" name="office" value="{{ old('office') }}"
                                                        class="form-control">
                                                </label>
                                                @error('office')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Password
                                                    <input type="password" name="password" class="form-control">
                                                </label>
                                                @error('password')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Building
                                                    <input type="text" name="building" value="{{ old('building') }}"
                                                        class="form-control">
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
                                                    <input type="checkbox" value="authorized" name="authorized">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Agent EID
                                                    <input type="file" name="agent_eid"
                                                        value="{{ old('agent_eid') }}" class="form-control">
                                                </label>
                                                @error('agent_eid')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Licence
                                                    <input type="file" name="licence" value="{{ old('licence') }}"
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
                                                    <input type="file" name="agent_visa"
                                                        value="{{ old('agent_visa') }}" class="form-control">
                                                </label>
                                                @error('agent_visa')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>RERA
                                                    <input type="file" name="rera" value="{{ old('rera') }}"
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
                                                        value="{{ old('additional_documents') }}" class="form-control">
                                                </label>
                                                @error('additional_documents')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Agent Photo
                                                    <input type="file" name="logo" value="{{ old('logo') }}"
                                                        class="form-control">
                                                </label>
                                                @error('logo')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 justify-content-center offset-md-4">
                                            <button type="submit" class="btn btn-success w-100 col-md-4">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
