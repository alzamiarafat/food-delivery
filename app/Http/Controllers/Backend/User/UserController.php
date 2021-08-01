<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return redirect()->route('home');
    }

    public function panel()
    {
        return view('user.index');
    }
}
