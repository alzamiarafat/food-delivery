<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function panel()
    {
        return view('user.panel');
    }

    public function index ()
    {
        $userList = User::where('type','user')->with('profile')->get();

        return view('dashboard.user.user_list',compact('userList'));
    }
    public function create ()
    {
        return view('dashboard.user.user_inputs');
    }
}
