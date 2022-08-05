{{-- @extends('agency.layouts.master')

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
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Purpose Type
                                                    <select name="purpose_type" id="" class="form-control w-110">
                                                        <option value="">Select Purpose</option>
                                                        @forelse ($purposes as $purpose)
                                                            <option value="{{ $purpose->id }}"
                                                                @if (old('purpose_type') == '{{ $purpose->id }}') selected @endif>
                                                                {{ $purpose->name }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </label>
                                                @error('purpose_type')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Property Type
                                                    <select name="property_type" id="property" class="form-control w-110">
                                                        <option value="">Select Property Type</option>
                                                        @forelse ($place_types as $property)
                                                            <option value="{{ $property->id }}"
                                                                @if (old('property_type') == '{{ $property->id }}') selected @endif>
                                                                {{ $property->name }}
                                                            </option>
                                                        @empty
                                                        @endforelse
                                                    </select>
                                                </label>
                                                @error('purpose_type')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 d-none" id="commercial">
                                            <div class="form-group">
                                                <label>Property type Commercial
                                                    <select name="property_type_commercial" id=""
                                                        class="form-control w-110">
                                                        <option value="">Select Property type Commercial</option>
                                                        @forelse ($place_types[0]->place as $placed_type)
                                                            <option value="{{ $placed_type->id }}"
                                                                @if (old('property_type_commercial') == '{{ $placed_type->id }}') selected @endif>
                                                                {{ $placed_type->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">No Property type Commercial</option>
                                                        @endforelse
                                                    </select>
                                                </label>
                                                @error('place_type')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-none" id="residential">
                                            <div class="form-group">
                                                <label>Property type Residential
                                                    <select name="property_type_residential" class="form-control w-110">
                                                        <option value="">Select Property type Residential</option>
                                                        @forelse ($place_types[1]->place as $placed_type)
                                                            <option value="{{ $placed_type->id }}"
                                                                @if (old('property_type_residential') == '{{ $placed_type->id }}') selected @endif>
                                                                {{ $placed_type->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">No Property type Residential</option>
                                                        @endforelse
                                                    </select>
                                                </label>
                                                @error('place_type')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-none" id="layout">
                                            <div class="form-group">
                                                <label>Select Layout
                                                    <input type="number" name="layout" value="{{ old('layout') }}"
                                                        class="form-control">
                                                </label>
                                                @error('layout')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3 d-none" id="bath">
                                            <div class="form-group">
                                                <label>Bath
                                                    <input type="number" name="bath" value="{{ old('bath') }}"
                                                        class="form-control">
                                                </label>
                                                @error('bath')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Size(Square Feet/Square Meter)
                                                    <input type="text" name="size" value="{{ old('size') }}"
                                                        class="form-control">
                                                </label>
                                                @error('size')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Building Name/No
                                                    <input type="text" name="building_name"
                                                        value="{{ old('building_name') }}" class="form-control">
                                                </label>
                                                @error('building_name')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Building Age
                                                    <input type="text" name="building_age"
                                                        value="{{ old('building_age') }}" class="form-control">
                                                </label>
                                                @error('building_age')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Price:
                                                    <input type="number" name="price" value="{{ old('price') }}"
                                                        class="form-control date">
                                                </label>
                                                @error('price')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Price Per:
                                                    <select name="price_per" id="" class="form-control">
                                                        <option value="">No Price Per</option>
                                                        <option value="day"
                                                            @if (old('price_per') == 'day') selected @endif>Day</option>
                                                        <option value="week"
                                                            @if (old('price_per') == 'week') selected @endif>Week</option>
                                                        <option value="month"
                                                            @if (old('price_per') == 'month') selected @endif>Month</option>
                                                        <option value="year"
                                                            @if (old('price_per') == 'year') selected @endif>Year</option>
                                                    </select>
                                                </label>
                                                @error('price_per')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>City
                                                    <select name="city" class="form-control w-110">
                                                        <option value="">Select City</option>
                                                        @forelse ($cities as $city)
                                                            <option value="{{ $city->id }}"
                                                                @if (old('city') == '{{ $city->id }}') selected @endif>
                                                                {{ $city->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">No City</option>
                                                        @endforelse
                                                    </select>
                                                </label>
                                                @error('purpose_type')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Area
                                                    <select name="area" class="form-control w-110">
                                                        <option value="">Select Area</option>
                                                        @forelse ($cities as $city)
                                                            <option value="{{ $city->id }}"
                                                                @if (old('city') == '{{ $city->id }}') selected @endif>
                                                                {{ $city->name }}
                                                            </option>
                                                        @empty
                                                            <option value="">No City</option>
                                                        @endforelse
                                                    </select>
                                                </label>
                                                @error('purpose_type')
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
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
@push('scripts')
    <script>
        $(document).ready(function() {
            $("#property").on('change', function() {
                var selectedText = $(this).find("option:selected").text().trim();
                var selectedValue = $(this).val();
                if (selectedText == 'Commercial' && selectedValue == 1) {
                    $('#residential').addClass('d-none');
                    $('#commercial').removeClass('d-none');
                } else {
                    $('#commercial').addClass('d-none');
                    $('#residential').removeClass('d-none');
                }
            });
        });
    </script>
@endpush --}}
