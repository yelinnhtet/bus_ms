<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $data = [
            'title'=> 'Users'
        ];
        $users = User::all();
        return view('admin.users.index', $data)->with('users', $users);
    }
}
