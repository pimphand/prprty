<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyCategory;
use Illuminate\Http\Request;

class PropertyCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['kategori'] = PropertyCategory::where('status', 1)->get();
        // dd($data);
        return view('admin.property.category.index', $data);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'string',
        ]);
        $category = new PropertyCategory();
        $category->name = $request->name;
        $category->status = 1;
        $category->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyCategory $propertyCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyCategory $propertyCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'string',
        ]);
        $category = PropertyCategory::find($id);
        $category->name = $request->name;
        $category->status = 1;
        $category->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyCategory  $propertyCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = PropertyCategory::find($id);
        $category->status = 0;
        $category->save();

        return redirect()->back();
    }
}
