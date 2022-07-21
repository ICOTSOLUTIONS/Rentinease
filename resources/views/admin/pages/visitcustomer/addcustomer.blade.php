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
            width: 205%;

        }

        .input-group input {
            width: 139px !important;
        }

        .dark .input-group-text {
            background-color: #c9c9c9;
            color: #040404;
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card design">
                        <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header justify-content-center">
                                <h4>Add Visitor Customer</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Visitor Customer Details</h6>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>First Name
                                                <input type="text" class="form-control" name="fname"
                                                    value="{{ old('fname') }}">
                                            </label>
                                            @error('fname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Last Name
                                                <input type="text" class="form-control" name="lname"
                                                    value="{{ old('lname') }}">
                                            </label>
                                            @error('lname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Rera no
                                                <input type="text" class="form-control" name="rera_no"
                                                    value="{{ old('rera_no') }}">
                                            </label>
                                            @error('rera_no')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Country
                                                <input type="text" class="form-control" name="country" value="UAE"
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
                                                {{-- <input type="text" class="form-control" name="city"
                                                    value="{{ old('city') }}"> --}}
                                                <select name="city" class="form-control w-110">
                                                    <option value="">Select City</option>
                                                    <option value="Dubai"
                                                        @if (old('city') == 'Dubai') selected @endif>Dubai</option>
                                                    <option value="Sharjah"
                                                        @if (old('city') == 'Sharjah') selected @endif>Sharjah</option>
                                                    {{-- <option value="Dubai" @if (old('city') == 'Dubai') selected @endif>Dubai</option>
                                                            <option value="Dubai" @if (old('city') == 'Dubai') selected @endif>Dubai</option>
                                                            <option value="Dubai" @if (old('city') == 'Dubai') selected @endif>Dubai</option>
                                                            <option value="Dubai" @if (old('city') == 'Dubai') selected @endif>Dubai</option> --}}
                                                </select>
                                            </label>
                                            @error('city')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Street
                                                <input type="text" class="form-control" name="street"
                                                    value="{{ old('street') }}">
                                            </label>
                                            @error('street')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Building
                                                <input type="text" class="form-control" name="building"
                                                    value="{{ old('building') }}">
                                            </label>
                                            @error('building')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Office
                                                <input type="text" class="form-control" name="office"
                                                    value="{{ old('office') }}">
                                            </label>
                                            @error('office')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Email
                                                <input type="email" class="form-control" name="email"
                                                    value="{{ old('email') }}">
                                            </label>
                                            @error('email')
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
                                                <input type="text" class="form-control" name="website"
                                                    value="{{ old('website') }}">
                                            </label>
                                            @error('website')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group justify-content-center">
                                            <label class="">Autorised
                                                <br>
                                                <input type="checkbox" class="" name="authorised">
                                            </label>
                                            @error('authorised')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Agent EID
                                                <input type="file" class="form-control" name="agent_eid">
                                            </label>
                                            @error('agent_eid')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="float-right">
                                            <div class="form-group">
                                                <label>Rera
                                                    <input type="file" class="form-control" name="rera">
                                                </label>
                                                @error('rera')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Additional Documents
                                                <input type="file" class="form-control" name="additional_documents">
                                            </label>
                                            @error('additional_documents')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Profile Logo
                                                <input type="file" class="form-control" name="logo">
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
