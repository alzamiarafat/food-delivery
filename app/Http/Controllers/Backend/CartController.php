<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function store(Request $request)
    {
        $item = Item::findOrFail($request->item_id);
//        $item = Item::findOrFail($request->itemId);
        $cart = Cart::add($item->id, $item->name, 1, $item->price,0,['unitPrice' => $item->price, 'image' => $item->image]);
        $count = Cart::content()->count();

        return back();
//        return response()->json(['cartCount' => $count, 'cartItem' => $cart]);
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return null
     */
    public function remove(Request $request)
    {
        Cart::remove($request->rowId);
        $cartCount = Cart::content()->count();

        return response()->json(['cartCount' => $cartCount]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return null
     */
    public function increase(Request $request)
    {
        $item = Cart::get($request->id);
        $unitPrice = $item->options->unitPrice;
        Cart::update($request->id, array('qty' => $item->qty + 1, 'price' => $unitPrice * $request->qty ));

        return response()->json(['price' => $item->price]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return null
     */
    public function decrease(Request $request)
    {
        $item = Cart::get($request->id);
        $unitPrice = $item->options->unitPrice;
        Cart::update($request->id, array('qty' => $item->qty - 1, 'price' => $item->price - $unitPrice));

        return response()->json(['price' => $item->price]);
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
