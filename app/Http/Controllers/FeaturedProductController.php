<?php

namespace App\Http\Controllers;

use App\Models\FeaturedProduct;
use App\Models\Property;
use Illuminate\Http\Request;

class FeaturedProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['product'] = FeaturedProduct::all();
        $data['property'] = Property::all();
        return view('admin.settings.product', $data);
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
        $product = new FeaturedProduct();
        $product->property_id = $request->property;
        $product->status = $request->status;
        $product->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeaturedProduct  $featuredProduct
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedProduct $featuredProduct)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeaturedProduct  $featuredProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedProduct $featuredProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeaturedProduct  $featuredProduct
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = FeaturedProduct::find($id);
        $product->property_id = $request->property;
        $product->status = $request->status;
        $product->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeaturedProduct  $featuredProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = FeaturedProduct::find($id);
        $product->delete();
        return redirect()->back();
    }
}
