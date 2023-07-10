<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Bus;

class BookingController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        return view('admin.booking.index', compact('bookings'));
    }

    public function create(){
        $buses = Bus::all();
        return view('admin.booking.create', compact('buses'));
    }

    public function create_validation(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'bus_number' => 'required',
            'no_of_seat' => 'required',
            'route_from' => 'required',
            'route_to' => 'required',
            'price' => 'required',
            'departure_date' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required'
        ]);

        Booking::create([
            'name'=>$request->name,
            'bus_number'=>$request->bus_number,
            'no_of_seat'=>$request->no_of_seat,
            'route_from'=>$request->route_from,
            'route_to'=>$request->route_to,
            'price'=>$request->price,
            'departure_date'=>$request->departure_date,
            'departure_time'=>$request->departure_time,
            'arrival_time'=>$request->arrival_time
        ]);

        return redirect()->route('booking-list')->with('success', 'Booking Data have been successfully added!');
    }

    public function edit($id)
    {
        $book_data = Booking::findOrFail($id);
        return view('admin.booking.edit-booking', compact('book_data'));
    }

    function edit_validation(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'bus_number' => 'required',
            'no_of_seat' => 'required',
            'route_from' => 'required',
            'route_to' => 'required',
            'price' => 'required',
            'departure_date' => 'required',
            'departure_time' => 'required',
            'arrival_time' => 'required'
        ]);

        Booking::find($id)->update([
            'name'=>$request->name,
            'bus_number'=>$request->bus_number,
            'no_of_seat'=>$request->no_of_seat,
            'route_from'=>$request->route_from,
            'route_to'=>$request->route_to,
            'price'=>$request->price,
            'departure_date'=>$request->departure_date,
            'departure_time'=>$request->departure_time,
            'arrival_time'=>$request->arrival_time,
        ]);

        return redirect()->route('booking-list')->with('success', 'Booking Data have been successfully updated');
    }

    function delete($id)
    {
        Booking::find($id)->delete();
        return redirect()->route('booking-list')->with('success', 'Booking Data have been successfully removed');
    }
}
