<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return null
     */
    public function checkout_index()
    {
        if (Auth::check()>0){
            $items = Cart::content();
            $totalPrice = 0;

            foreach ($items as $item){
                $price = $item->price;
                $totalPrice += $price;

            }
            return view('web.checkout',compact('totalPrice'));
        }else {
            return redirect()->route('login');
        }
    }
    public function index()
    {
        $orderList = Order::where('user_id', auth()->user()->id)->get();

        return view('user.order.order_list',compact('orderList'));
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
        try {
            $order = new Order;

            $order->user_id = auth()->user()->id;
            $order->sub_total = $request->sub_total;
            $order->delivery_cost = $request->delivery_cost;
            $order->total = $request->total;
            $order->save();
            foreach (Cart::content() as $item){
                Cart::remove($item->rowId);
            }
            return redirect()->back()->with('message_success', 'Offer has been created successfully.');
        }catch (\Exception $exception){
            return redirect()->back()->with('message_error', 'Something went wrong.');
        }
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
