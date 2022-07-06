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
                        <form action="{{ route('coinsdeduct.update',['coinsdeduct'=>$coins_deduct->id]) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-header justify-content-center">
                                <h4>Update Coins Deduction</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <h6 class="text-success">Enter Your Coins Deduction Details</h6>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Listning Type
                                                <select name="package" id="package" class="form-control w-178">
                                                    <option value="">Select Listning Type</option>
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
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Coins
                                                <input type="text" name="coins" class="form-control"
                                                    @if (old('coins')) value="{{ old('coins') }}"
                                                @else
                                                value="{{ $coins_deduct->coins_deduct }}" @endif />
                                            </label>
                                            @error('coins')
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
