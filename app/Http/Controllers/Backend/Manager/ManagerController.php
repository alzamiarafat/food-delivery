<?php

namespace App\Http\Controllers\Backend\Manager;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Shop\Shop;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function manager_panel()
    {
        return view('manager.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return null
     */
    public function index()
    {
        $managerList = User::where('type','manager')->with('profile')->get();

        return view('dashboard.manager.manager_list',compact('managerList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return null
     */
    public function create()
    {
        $shopList = Shop::where('owner_id',auth()->user()->id)->get();
        return view('dashboard.manager.manager_inputs',compact('shopList'));
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
            'full_name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'contact_no' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'nid' => 'numeric',
            'address' => 'required',
            'image'       =>  'required|mimes:jpeg,png,bmp,jpg,gif,webp,svg|max:5120',
            'password' => 'required|min:8',
            'confirm_password' => 'required_with:password|same:password|min:8'
        ]);

        try {
            $user = new User;
            $manager = new Profile;

            $user->username = $request->username;
            $user->email = $request->email;
            $user->role = 'manager';
            $user->type = 'manager';
            $user->weight = '49.99';
            $user->password = Hash::make($request->password);

            $manager->full_name = $request->full_name;
            $manager->nid = $request->nid;
            $manager->dob = $request->date_of_birth;
            $manager->gender = $request->gender;
            $manager->contact_no = $request->contact_no;
            $manager->address = $request->address;
            if ($request->hasFile('image')) {
                $get_photo = $request->file('image');
                $photo = 'photo_' . str_replace(' ', '_', $request->username) . time() . "." . $get_photo->extension();
                $get_photo->move(Profile::PATH, $photo);
                $manager->image = $photo;
            }

            $user->save();
            $profile = $user->profile()->save($manager);
            Shop::Where('id',$request->shop_id)->update(['manager_id'=>$profile->id]);

            return redirect()->route('dashboard.manager.index')->with('message_success', 'Manager has been created successfully.');
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
