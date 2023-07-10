@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Add New Bus</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('bus-list')}}">Buses</a></li>
                    <li class="breadcrumb-item active">Add New Bus</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('body')
    <!-- main row -->
    <div class="row">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="{{route('create_validation')}}" method="POST">
                        @csrf
                        <div class="formgroup mt-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Bus Name" value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="bus_number">Bus Number</label>
                            <input type="text" name="bus_number" id="bus_number" class="form-control @error('bus_number') is-invalid @enderror" placeholder="Enter Bus Number" value="{{ old('bus_number') }}">
                            @error('bus_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="no_of_seat">Number of Seat</label>
                            <input type="number" name="no_of_seat" id="no_of_seat" class="form-control @error('no_of_seat') is-invalid @enderror" placeholder="Enter Number of Seat" value="{{ old('no_of_seat') }}">
                            @error('no_of_seat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="route_from">Route From</label>
                            <input type="text" name="route_from" id="route_from" class="form-control @error('route_from') is-invalid @enderror" placeholder="Enter Route From" value="{{ old('route_from') }}">
                            @error('route_from')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="route_to">Route To</label>
                            <input type="text" name="route_to" id="route_to" class="form-control @error('route_to') is-invalid @enderror" placeholder="Enter Route To" value="{{ old('route_to') }}">
                            @error('route_to')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control @error('price') is-invalid @enderror" placeholder="Enter Price" value="{{ old('price') }}">
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="departure_date">Departure Date</label>
                            <input type="date" name="departure_date" id="departure_date" class="form-control @error('departure_date') is-invalid @enderror" placeholder="Enter Departure Date" value="{{ old('departure_date') }}">
                            @error('departure_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="departure_time">Departure Time</label>
                            <input type="time" name="departure_time" id="departure_time" class="form-control @error('departure_time') is-invalid @enderror" placeholder="Enter Departure Time" value="{{ old('departure_time') }}">
                            @error('departure_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="arrival_time">Arrival Time</label>
                            <input type="time" name="arrival_time" id="arrival_time" class="form-control @error('arrival_time') is-invalid @enderror" placeholder="Enter Arrival Time" value="{{ old('arrival_time') }}">
                            @error('arrival_time')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3 mb-3">
                            <a href="{{route('bus-list')}}" class="btn btn-outline-primary mr-2">Cancel</a>
                            <input type="submit" class="btn btn-primary" value="Save">
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
