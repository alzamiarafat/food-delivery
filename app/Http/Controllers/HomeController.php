<?php

namespace App\Http\Controllers;

use App\Models\Category;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoryList = Category::where('status',1)->orderBy('serial_no','ASC')->get();

        return view('web.index',compact('categoryList'));
    }
}
