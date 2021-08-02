<?php

namespace App\Http\Controllers\Backend\Manager;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

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
        return view('dashboard.manager.manager_inputs');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
