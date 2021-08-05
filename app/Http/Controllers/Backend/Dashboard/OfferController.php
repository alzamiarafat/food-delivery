<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return null
     */
    public function index()
    {
        $offerList = Offer::where('user_id',auth()->user()->id )->get();
        return view('dashboard.offer.offer_list',compact('offerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return null
     */
    public function create()
    {
        return view('dashboard.offer.offer_inputs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return null
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'full_name' => 'required',
//            'username' => 'required',
//            'email' => 'required',
//            'contact_no' => 'required',
//            'date_of_birth' => 'required',
//            'gender' => 'required',
//            'nid' => 'numeric',
//            'address' => 'required',
//            'image'       =>  'required|mimes:jpeg,png,bmp,jpg,gif,webp,svg|max:5120',
//            'password' => 'required|min:8',
//            'confirm_password' => 'required_with:password|same:password|min:8'
//        ]);

        try {
            $offer = new Offer;

            $offer->user_id = auth()->user()->id;
            $offer->title = $request->title;
            $offer->code = $request->code;
            $offer->discount_type = $request->discount_type;
            $offer->discount_amount= $request->discount_amount;
            $offer->start_at = $request->start_at;
            $offer->end_at = $request->end_at;
            $offer->min_amount_uses = $request->min_amount_uses;
            $offer->total_uses = $request->total_uses;
            $offer->per_person_uses = $request->per_person_uses;
            $offer->save();

            return redirect()->route('dashboard.offer.index')->with('message_success', 'Offer has been created successfully.');
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
