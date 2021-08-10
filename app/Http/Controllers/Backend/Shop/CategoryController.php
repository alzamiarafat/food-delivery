<?php

namespace App\Http\Controllers\Backend\Shop;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return null
     */
    public function index()
    {
        $categoryList = Category::all();
        return view('dashboard.category.category_list',compact('categoryList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return null
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
        $request->validate([
            'name' => 'required',
            'serial_no' => 'numeric'
        ]);
        $category = new Category;
        $category->category_code = $request->category_code;
        $category->name = $request->name;
        $category->serial_no = $request->serial_no;
        if ($request->hasFile('image')) {
            $get_photo = $request->file('image');
            $photo = 'category_' . str_replace(' ', '_', $request->name) . time() . "." . $get_photo->extension();
            $get_photo->move(Category::PATH, $photo);
            $category->image = $photo;
        }
        if ($request->hasFile('icon')) {
            $get_icon = $request->file('icon');
            $icon = 'icon_' . str_replace(' ', '_', $request->name) . time() . "." . $get_icon->extension();
            $get_icon->move(Category::PATH, $icon);
            $category->icon = $icon;
        }
        $category->save();

        return back()->with('message_success', 'Category has been created successfully.');
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
