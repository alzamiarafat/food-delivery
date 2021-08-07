<?php

namespace App\Http\Controllers\Backend\User;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Order\Order;
use App\Models\Order\OrderItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\DB;

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
    protected function get_order()
    {
        $orderList = Order::join('order_items', 'orders.id', '=', 'order_items.order_id')
            ->join('items', 'order_items.item_id', '=', 'items.id')
            ->join('profiles','orders.user_id', '=', 'profiles.user_id')
            ->select('orders.*','items.*','profiles.full_name','profiles.contact_no')
            ->get();
        return $orderList;
    }

    public function index()
    {
        $orders = Order::get();

        if (auth()->user()->weight <= 9.99){
            return view('user.order.order_list',compact('orders'));
        }else {
            return view('dashboard.order.order_list',compact('orders'));
        }

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
            $orderId = Order::select('id')->orderBy('id', 'DESC')->first();

            $orderItem = new OrderItem;
            $itemId = $request->item;
            $itemQty = $request->qty;
            $value = [];
            for ($i=0; $i<count($itemId); $i++){
                $data =  array(
                    'order_id' => $orderId->id,
                    'item_id' => $itemId[$i],
                    'quantity' => $itemQty[$i]
                );
                array_push($value,$data);
            }
            $orderItem->insert($value);

            foreach (Cart::content() as $item){
                Cart::remove($item->rowId);
            }
            return redirect()->back()->with('order_success', 'Order has been created successfully.');
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
        return view('user.order.order_details');
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
