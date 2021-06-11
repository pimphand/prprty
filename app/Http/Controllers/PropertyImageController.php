<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PropertyImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['properti'] = Property::all();
        $data['gambar'] = PropertyImage::all();
        return view('admin.property.image.index', $data);
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
        $image = new PropertyImage();
        $image->property_id = $request->property_id;
        $image->name = $request->name;
        if ($request->hasFile("image")) {
            $imageName = Str::uuid();
            FileController::room($request->file("image"), $imageName, $image->image);
            $image->image = $imageName;
        }
        $image->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyImage  $propertyImage
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyImage $propertyImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyImage  $propertyImage
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Property::find($id);
        $propertyImage = PropertyImage::where('property_id', $data->id)->get();
        return view('admin.property.image.details', [
            'image' => $propertyImage,
            'prop' => $data,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PropertyImage  $propertyImage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PropertyImage $propertyImage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyImage  $propertyImage
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $propertyImage = PropertyImage::find($id);
        PropertyImage::destroy($id);
        Storage::delete('public/room/' . $propertyImage->image);
        return redirect()->back();
    }
}
