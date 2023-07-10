@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Bookings</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Bookings</li>
                </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection

@section('body')
    <!-- main row -->
    <div class="row">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="container-fluid">
            <div class="text-right mb-3">
                <a class="btn btn-success btn-sm" href="{{route('create-booking')}}" role="button"><i class="fas fa-plus mr-2"></i> Add New</a>
            </div>
            <table class="table table-border">
                <caption>List of Booking</caption>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Booking Number</th>
                    <th scope="col">Customer Name</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Seat Number</th>
                    <th scope="col">Total Amount</th>
                    <th scope="col">Bus Number</th>
                    <th scope="col">Booking Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($bookings as $book)
                  <tr>
                    <th scope="row">{{$book->id}}</th>
                    <td>{{$book->booking_number}}</td>
                    <td>{{$book->customer_name}}</td>
                    <td>{{$book->phone_number}}</td>
                    <td>{{$book->departure_date}}</td>
                    <td>{{$book->seat_number}}</td>
                    <td>{{$book->total_amount}}</td>
                    <td>{{$book->bus_number}}</td>
                    <td>{{$book->booking_date}}</td>
                    <td>
                        <form action="{{ route('delete-booking', $book->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <a href="{{ route('edit-booking', $book->id) }}" style="text-decoration:none">
                                <button type="button" class="btn btn-primary btn-sm mb-2"><i class="far fa-edit"></i> Edit</button>
                            </a>
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash"></i> Delete</button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- /.row (main row) -->
@endsection
