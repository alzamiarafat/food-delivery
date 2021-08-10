<?php

namespace App\Http\Controllers\Backend\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use App\Models\Shop\Shop;
use App\Models\Shop\ShopBranch;
use App\Models\Shop\ShopItem;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return null
     */
    public function index()
    {
        $itemList = Item::with('shop_item')->get();
        return view('dashboard.item.item_list',compact('itemList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return null
     */
    public function create()
    {
        $branches = ShopBranch::all();
        $categoryList = Category::all();

        return view('dashboard.item.item_inputs',compact('branches','categoryList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'          =>  'required',
            'shop_name'     =>  'required',
            'category_name' =>  'required',
            'price'         =>  'numeric',
            'image'         =>  'required|mimes:jpeg,png,bmp,jpg,gif,webp,svg|max:5120',
        ]);

        try {
            $item = new Item;
            $shopItem = new ShopItem;

            $item->name = $request->name;
            $item->item_code = $request->item_code;
            $item->currency = $request->currency;
            $item->discount_type = $request->discount_type;
            $item->discount_amount = $request->discount_amount;
            $item->price = $request->price;
            $item->short_description = $request->short_description;
            $item->long_description = $request->long_description;

            $shopItem->shop_id = $request->shop_name;
            $shopItem->category_id = $request->category_name;

            if ($request->hasFile('image')) {
                $get_photo = $request->file('image');
                $photo = 'item_' . str_replace(' ', '_', $request->name) . time() . "." . $get_photo->extension();
                $get_photo->move(Item::PATH, $photo);
                $item->image = $photo;
            }

            $item->save();
            $item->shop_item()->save($shopItem);

            return redirect()->route('dashboard.item.index')->with('message_success', 'Item has been created successfully.');
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
