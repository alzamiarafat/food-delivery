<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use App\Models\Shop\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return null
     */
    public function index()
    {
        $shopList = Shop::all();
        return view('dashboard.shop.shop_list', compact('shopList'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return null
     */
    public function create()
    {
        return view('dashboard.shop.shop_inputs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact_no' => 'required',
            'email' => 'required',
        ]);
        $shop = new Shop;
        $shop->owner_id = auth()->user()->id;
        $shop->shop_code = $request->shop_code;
        $shop->name = $request->name;
        $shop->contact_no= $request->contact_no;
        $shop->email = $request->email;
        $shop->since = $request->since;
        $shop->status = 1;
        $shop->save();

        return redirect()->route('dashboard.shop.index')->with('message_success', 'Shop has been created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
