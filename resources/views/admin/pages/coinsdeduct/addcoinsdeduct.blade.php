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
                        <form action="{{ route('coinsdeduct.store') }}" method="POST">
                            @csrf
                            <div class="card-header justify-content-center">
                                <h4>Add Coins Deduction</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Coins Deduction Details</h6>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Listining Type
                                                <select name="package" id="package" class="form-control w-178">
                                                    <option value="">Select Packages</option>
                                                    @forelse ($packages as $package)
                                                        @if (old('package'))
                                                            <option value="{{ $package->id }}" selected>
                                                                {{ $package->name }}</option>
                                                        @else
                                                            <option value="{{ $package->id }}">{{ $package->name }}
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Coins
                                                <input type="text" name="coins" value="{{ old('coins') }}"
                                                    class="form-control">
                                            </label>
                                            @error('coins')
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
