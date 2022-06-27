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
                        <form action="{{ route('package.update',['package'=>$package->id]) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="card-header justify-content-center">
                                <h4>Update Package</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Package Details</h6>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Name
                                                <input type="text" name="name" class="form-control"
                                                    @if (old('name')) value="{{ old('name') }}"
                                                @else
                                                value="{{ $package->name }}" @endif />
                                            </label>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Coins
                                                <input type="text" name="coins" class="form-control"
                                                    @if (old('coins')) value="{{ old('coins') }}"
                                                @else
                                                value="{{ $package->coins }}" @endif />
                                            </label>
                                            @error('coins')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Duration
                                                <input type="text" name="duration" class="form-control"
                                                    @if (old('duration')) value="{{ old('duration') }}"
                                                @else
                                                value="{{ $package->duration }}" @endif />
                                            </label>
                                            @error('duration')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Description
                                                <input type="text" name="desc" class="form-control"
                                                    @if (old('desc')) value="{{ old('desc') }}"
                                                @else
                                                value="{{ $package->description }}" @endif />
                                            </label>
                                            @error('desc')
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
