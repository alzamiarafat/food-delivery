<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Item;

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
        $itemList = Item::orderBy('id','DESC')->take(10)->get();

        return view('web.index',compact('categoryList','itemList'));
    }
}
