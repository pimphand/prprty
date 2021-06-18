<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $property = Property::all();
        $category = PropertyCategory::where('status', 1)->get();
        return view('admin.property.index',)->with([
            'properti' => $property,
            'kategori' => $category,
        ]);
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
        $property = new Property();
        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::image($request->file("image"), $imageName, $property->image);
            $property->image = $imageName;
        }
        $property->code = 'PROP' . mt_rand(1000, 9999) . mt_rand(100, 999);
        $property->category_id = $request->category_id;
        $property->name = $request->name;
        $property->description = $request->description;
        $property->maps = $request->maps;
        $property->price = $request->price;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->province = $request->province;
        $property->zip = $request->zip;
        $property->bedrooms = $request->bedrooms;
        $property->area = $request->area;
        $property->longi = $request->longi;
        $property->langi = $request->langi;
        $property->bathrooms = $request->bathrooms;
        $property->garages = $request->garages;
        // $property->feature = $request->feature;

        $property->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::find($id);
        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::image($request->file("image"), $imageName, $property->image);
            $property->image = $imageName;
        }
        $property->category_id = $request->category_id;
        $property->name = $request->name;
        $property->description = $request->description;
        $property->maps = $request->maps;
        $property->price = $request->price;
        $property->address = $request->address;
        $property->city = $request->city;
        $property->province = $request->province;
        $property->zip = $request->zip;
        $property->bedrooms = $request->bedrooms;
        $property->longi = $request->longi;
        $property->area = $request->langi;
        $property->area = $request->area;
        $property->bathrooms = $request->bathrooms;
        $property->garages = $request->garages;
        $property->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        //
    }
}
