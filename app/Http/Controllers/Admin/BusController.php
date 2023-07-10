<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;

class BusController extends Controller
{
    public function bus_list(){
        $buses = Bus::all();
        return view('admin.busList.bus-list', compact('buses'));
    }

    public function create(){
        return view('admin.busList.create-bus');
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

        Bus::create([
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

        return redirect()->route('bus-list')->with('success', 'Successfully added!');
    }

    public function edit($id)
    {
        $bus_data = Bus::findOrFail($id);
        return view('admin.busList.edit-bus', compact('bus_data'));
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

        Bus::find($id)->update([
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

        return redirect()->route('bus-list')->with('success', 'Bus Data Updated');
    }

    function delete($id)
    {
        Bus::find($id)->delete();
        return redirect()->route('bus-list')->with('success', 'Bus Data Removed');
    }
}
