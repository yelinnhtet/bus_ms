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
                    <form action="" method="POST">
                        @csrf
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
