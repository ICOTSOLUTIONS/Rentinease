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
                    <div class="card design">
                        <form action="{{ route('admin.update',['admin'=>$admin->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header justify-content-center">
                                <h4>Update Admin</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Admin Details</h6>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>First Name
                                                <input type="text" name="fname" class="form-control"
                                                    @if (old('fname')) value="{{ old('fname') }}"
                                                @else
                                                value="{{ $admin->fname }}" @endif />
                                            </label>
                                            @error('fname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Last Name
                                                <input type="text" name="lname" class="form-control"
                                                    @if (old('lname')) value="{{ old('lname') }}"
                                                @else
                                                value="{{ $admin->lname }}" @endif />
                                            </label>
                                            @error('lname')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email
                                                <input type="email" name="email" class="form-control"
                                                    @if (old('email')) value="{{ old('email') }}"
                                                @else
                                                value="{{ $admin->email }}" @endif />
                                            </label>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Password
                                                <input type="password" name="password" value="{{ old('password') }}"
                                                    class="form-control">
                                            </label>
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Contact Number
                                                <input type="text" name="phone" class="form-control"
                                                    @if (old('phone')) value="{{ old('phone') }}"
                                                @else
                                                value="{{ $admin->phone }}" @endif />
                                            </label>
                                            @error('phone')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Designation
                                                <input type="text" name="designation" class="form-control"
                                                    @if (old('designation')) value="{{ old('designation') }}"
                                                @else
                                                value="{{ $admin->designation }}" @endif />
                                            </label>
                                            @error('designation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Picture
                                                <input type="file" name="logo" class="form-control"
                                                    @if (old('logo')) value="{{ old('logo') }}"
                                                @else
                                                value="{{ $admin->logo }}" @endif />
                                            </label>
                                            @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
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
{{-- @section('script')
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
@endsection --}}
