@extends('admin.main-layout')

@section('content-header')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Buses</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Buses</li>
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
                <a class="btn btn-success btn-sm" href="{{route('create-bus')}}" role="button"><i class="fas fa-plus mr-2"></i> Add New</a>
            </div>
            <table class="table table-border">
                <caption>List of buses</caption>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Bus Number</th>
                    <th scope="col">Number of Seat</th>
                    <th scope="col">Route From</th>
                    <th scope="col">Route To</th>
                    <th scope="col">Price</th>
                    <th scope="col">Departure Date</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($buses as $bus)
                  <tr>
                    <th scope="row">{{$bus->id}}</th>
                    <td>{{$bus->name}}</td>
                    <td>{{$bus->bus_number}}</td>
                    <td>{{$bus->no_of_seat}}</td>
                    <td>{{$bus->route_from}}</td>
                    <td>{{$bus->route_to}}</td>
                    <td>{{$bus->price}}</td>
                    <td>{{$bus->departure_date}}</td>
                    <td>{{$bus->departure_time}}</td>
                    <td>{{$bus->arrival_time}}</td>
                    <td>
                        <form action="{{ route('delete-bus', $bus->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <a href="{{ route('edit-bus', $bus->id) }}" style="text-decoration:none">
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
