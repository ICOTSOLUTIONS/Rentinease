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
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card design">
                    <form action="{{ route('assistant.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header justify-content-center">
                            <h4>Add Assistant Admin</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <h6 class="text-success">Enter Your Assistant Admin Details</h6>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="w-100">First Name
                                            <input type="text" name="fname" value="{{ old('fname') }}" class="form-control">
                                        </label>
                                        @error('fname')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="w-100">Last Name
                                            <input type="text" name="lname" value="{{ old('lname') }}" class="form-control">
                                        </label>
                                        @error('lname')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="w-100">Email
                                            <input type="email" name="email" value="{{ old('email') }}" class="form-control">
                                        </label>
                                        @error('email')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="w-100">Password
                                            <input type="password" name="password" value="{{ old('password') }}" class="form-control">
                                        </label>
                                        @error('password')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="w-100">Contact Number
                                            <input type="text" name="phone" value="{{ old('phone') }}" class="form-control">
                                        </label>
                                        @error('phone')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="w-100">Designation
                                            <input type="text" name="designation" value="{{ old('designation') }}" class="form-control">
                                        </label>
                                        @error('designation')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="w-100">Picture
                                            <input type="file" name="logo" value="{{ old('logo') }}" class="form-control">
                                        </label>
                                        @error('logo')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row justify-content-center">
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