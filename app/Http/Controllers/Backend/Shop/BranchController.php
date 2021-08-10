<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Shop\Shop;
use App\Models\Shop\ShopBranch;
use App\Models\User;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return null
     */
    public function index()
    {

        $branches = ShopBranch::join('shops','shops.id','=','shop_branches.shop_id')
            ->join('profiles','profiles.user_id','=','shop_branches.manager_id')->get();

//        return $branches;
//        $shopList = Shop::first()->branch;
//
//        $managers = ShopBranch::with('manager')->get();


//        $managers = [];
//        foreach ($shopList as $shop){
//            $data = Profile::where('user_id',$shop->manager_id)->get();
//            array_push($managers,$data);
//        }
//        foreach ((object)$managers as $m){
//            echo $m;
//        }


//        for ($i=0; $i<count($managers); $i++){
//            for ($j=0; $j<$i; $j++){
//                echo $managers[$i][$j];
//            }
//        }

        return view('dashboard.branch.branch_list',compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return null
     */
    public function create()
    {
        $shop = Shop::where('owner_id',auth()->user()->id)->first();
        $managers = User::where('type','manager')->with('profile')->get();

        return view('dashboard.branch.branch_inputs',compact('shop','managers'));
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
            'manager_id' => 'required',
            'contact_no' => 'required',
        ]);
        $shopBranch = new ShopBranch;
        $shopBranch->branch_code = 'Bran-'.rand(1000,99999);
        $shopBranch->shop_id = $request->shop_id;
        $shopBranch->manager_id = $request->manager_id;
        $shopBranch->contact_no = $request->contact_no;
        $shopBranch->address = $request->address;
        $shopBranch->division = $request->division;
        $shopBranch->district = $request->district;
        $shopBranch->thana = $request->thana;
        $shopBranch->postal_code = $request->postal_code;
        $shopBranch->status = 1;
        $shopBranch->save();

        return redirect()->route('dashboard.branch.index')->with('message_success', 'Shop Branch has been created successfully.');
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
