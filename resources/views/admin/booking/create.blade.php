@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Add New Booking</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('booking-list')}}">Booking</a></li>
                    <li class="breadcrumb-item active">Add New Booking</li>
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
                    <form action="{{route('create_booking_validation')}}" method="POST">
                        @csrf
                        <div class="formgroup mt-3">
                            <label for="booking_number">Booking Number</label>
                            <input type="text" name="booking_number" id="booking_number" class="form-control @error('booking_number') is-invalid @enderror" placeholder="Enter Booking Number" value="{{ old('booking_number') }}">
                            @error('booking_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="customer_name">Customer Name</label>
                            <input type="text" name="customer_name" id="customer_name" class="form-control @error('customer_name') is-invalid @enderror" placeholder="Enter Customer Name" value="{{ old('customer_name') }}">
                            @error('customer_name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="phone_number">Phone Number</label>
                            <input type="number" name="phone_number" id="phone_number" class="form-control @error('phone_number') is-invalid @enderror" placeholder="Enter Phone Number" value="{{ old('phone_number') }}">
                            @error('phone_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="departure_date">Departure Date</label>
                            <input type="date" name="departure_date" id="departure_date" class="form-control @error('departure_date') is-invalid @enderror" placeholder="Enter Departuer Date" value="{{ old('departure_date') }}">
                            @error('departure_date')
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
                            <table class="table">
                                @foreach ($buses as $seat)
                                    @for ($i = 0; $i < $seat->no_of_seat; $i=$i+10)
                                        <tr>
                                            <td class="text-center border bg-success">{{ $i+1 }}</td>
                                            <td class="text-center border bg-success">{{ $i+2 }}</td>
                                            <td class="text-center border bg-success">{{ $i+3 }}</td>
                                            <td class="text-center border bg-success">{{ $i+4 }}</td>
                                            <td class="text-center border bg-success">{{ $i+5 }}</td>
                                            <td class="text-center border bg-success">{{ $i+6 }}</td>
                                            <td class="text-center border bg-success">{{ $i+7 }}</td>
                                            <td class="text-center border bg-success">{{ $i+7 }}</td>
                                            <td class="text-center border bg-success">{{ $i+8 }}</td>
                                            <td class="text-center border bg-success">{{ $i+9 }}</td>
                                            <td class="text-center border bg-success">{{ $i+10 }}</td>
                                        </tr>
                                    @endfor
                                @endforeach
                            </table>
                        </div>
                        <div class="formgroup mt-3">
                            <label for="seat_number">Seat Number</label>
                            <input type="text" name="seat_number" id="seat_number" class="form-control @error('seat_number') is-invalid @enderror" placeholder="Enter Seat Number" value="{{ old('seat_number') }}">
                            @error('seat_number')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="total_amount">Total Amount</label>
                            <input type="number" name="total_amount" id="total_amount" class="form-control @error('total_amount') is-invalid @enderror" placeholder="Enter Total Amount" value="{{ old('total_amount') }}">
                            @error('total_amount')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3">
                            <label for="booking_date">Booking Date</label>
                            <input type="date" name="booking_date" id="booking_date" class="form-control @error('booking_date') is-invalid @enderror" placeholder="Enter Booking Date" value="{{ old('booking_date') }}">
                            @error('booking_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="formgroup mt-3 mb-3">
                            <a href="{{route('booking-list')}}" class="btn btn-outline-primary mr-2">Cancel</a>
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
