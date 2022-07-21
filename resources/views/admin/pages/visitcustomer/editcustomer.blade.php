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
                        <form action="{{ route('customer.update', ['customer' => $customer->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header justify-content-center">
                                <h4>Update Visitor Customer</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Visitor Customer Details</h6>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>First Name
                                                <input type="text" name="fname" class="form-control"
                                                    @if (old('fname')) value="{{ old('fname') }}"
                                                    @else
                                                        value="{{ $customer->fname }}" @endif />
                                            </label>
                                            @error('fname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Last Name
                                                <input type="text" name="lname" class="form-control"
                                                    @if (old('lname')) value="{{ old('lname') }}"
                                                    @else
                                                        value="{{ $customer->lname }}" @endif />
                                            </label>
                                            @error('lname')
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
                                                        value="{{ $customer->rera_no }}" @endif />
                                            </label>
                                            @error('rera_no')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Country
                                                <input type="text" name="country" class="form-control" value="UAE"
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
                                                {{-- <input type="text" name="city" class="form-control"
                                                    @if (old('city')) value="{{ old('city') }}"
                                                @else
                                                    value="{{ $customer->city }}" @endif /> --}}
                                                <select name="city" class="form-control w-110">
                                                    <option value="">Select City</option>
                                                    <option
                                                        @if (old('city') == 'Dubai') value = "{{ old('city') }}" selected
                                                            @elseif($customer->city == 'Dubai') 
                                                                value = "{{ $customer->city }}" selected
                                                            @else
                                                                value = "Dubai" @endif>
                                                        Dubai</option>
                                                    <option
                                                        @if (old('city') == 'Shrajah') value = "{{ old('city') }}" selected
                                                            @elseif($customer->city == 'Shrajah') 
                                                                value = "{{ $customer->city }}" selected
                                                            @else
                                                                value = "Shrajah" @endif>
                                                        Shrajah</option>
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
                                                <input type="text" name="street" class="form-control"
                                                    @if (old('street')) value="{{ old('street') }}"
                                                    @else
                                                        value="{{ $customer->street }}" @endif />
                                            </label>
                                            @error('street')
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
                                                        value="{{ $customer->building }}" @endif />
                                            </label>
                                            @error('building')
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
                                                    value="{{ $customer->office }}" @endif />
                                            </label>
                                            @error('office')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Email
                                                <input type="email" name="email" class="form-control"
                                                    @if (old('email')) value="{{ old('email') }}"
                                                @else
                                                    value="{{ $customer->email }}" @endif />
                                            </label>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Phone
                                                <div class="input-group form-group">
                                                    <span class="input-group-text" id="addon-wrapping">+971</span>
                                                    <input type="hidden" name="p_code" value="+971">
                                                    <input type="number" name="phone" class="form-control"
                                                        @if (old('phone')) value="{{ old('phone') }}"
                                                @else
                                                value="{{ $customer->phone }}" @endif />
                                                </div>
                                            </label>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Mobile
                                                <div class="input-group form-group">
                                                    <span class="input-group-text" id="addon-wrapping">+971</span>
                                                    <input type="hidden" name="m_code" value="+971">
                                                    <input type="number" name="mobile" class="form-control phone"
                                                        @if (old('mobile')) value="{{ old('mobile') }}"
                                                @else
                                                value="{{ $customer->mobile }}" @endif />
                                                </div>
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
                                                        value="{{ $customer->website }}" @endif />
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
                                                <input type="file" class="form-control" name="agent_eid"
                                                    value="{{ $customer->eid }}">
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
                                                    <input type="file" class="form-control" name="rera"
                                                        value="{{ $customer->rera }}">
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
                                                <input type="file" class="form-control" name="additional_documents"
                                                    value="{{ $customer->additional_documents }}">
                                            </label>
                                            @error('additional_documents')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Profile Logo
                                                <input type="file" class="form-control" name="logo"
                                                    value="{{ $customer->logo }}">
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
