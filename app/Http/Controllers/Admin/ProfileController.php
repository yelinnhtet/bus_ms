<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Booking;

class ProfileController extends Controller
{
    public function dashboard(){
        $data = [
            'title'=> 'Dashboard'
        ];
        $bus_data = Bus::count();
        $book_data = Booking::count();
        return view('admin.dashboard', $data, compact('bus_data', 'book_data'));
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success', 'You have been successfully logged out.');
    }
}
