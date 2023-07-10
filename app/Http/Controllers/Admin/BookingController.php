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
            'booking_number' => 'required',
            'customer_name' => 'required',
            'phone_number' => 'required',
            'departure_date' => 'required',
            'bus_number' => 'required',
            'seat_number' => 'required',
            'total_amount' => 'required',
            'booking_date' => 'required'
        ]);

        Booking::create([
            'booking_number'=>$request->booking_number,
            'customer_name'=>$request->customer_name,
            'phone_number'=>$request->phone_number,
            'departure_date'=>$request->departure_date,
            'bus_number'=>$request->bus_number,
            'seat_number'=>$request->seat_number,
            'total_amount'=>$request->total_amount,
            'booking_date'=>$request->booking_date,
        ]);

        return redirect()->route('booking-list')->with('success', 'Booking Data have been successfully added!');
    }

    public function edit($id)
    {
        $book_data = Booking::findOrFail($id);
        return view('admin.booking.edit', compact('book_data'));
    }

    function edit_validation(Request $request, $id)
    {
        $request->validate([
            'booking_number' => 'required',
            'customer_name' => 'required',
            'phone_number' => 'required',
            'departure_date' => 'required',
            'bus_number' => 'required',
            'seat_number' => 'required',
            'total_amount' => 'required',
            'booking_date' => 'required'
        ]);

        Booking::find($id)->update([
            'booking_number'=>$request->booking_number,
            'customer_name'=>$request->customer_name,
            'phone_number'=>$request->phone_number,
            'departure_date'=>$request->departure_date,
            'bus_number'=>$request->bus_number,
            'seat_number'=>$request->seat_number,
            'total_amount'=>$request->total_amount,
            'booking_date'=>$request->booking_date,
        ]);

        return redirect()->route('booking-list')->with('success', 'Booking Data have been successfully updated');
    }

    function delete($id)
    {
        Booking::find($id)->delete();
        return redirect()->route('booking-list')->with('success', 'Booking Data have been successfully removed');
    }
}
