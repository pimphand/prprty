<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $prop = Property::all();
        return view('frontend.layouts.app')->with([
            'prop' => $prop,
        ]);
    }

    public function search(Request $request)
    {
        $data["properties"] = Property::select('properties.*')
            ->join('property_categories', 'properties.category_id', '=', 'property_categories.id')
            ->whereRaw("property_categories.name LIKE '%$request->name%'")
            ->orwhereRaw("properties.name LIKE '%$request->name%'")
            ->orwhereRaw("properties.price LIKE '%$request->name%'")
            ->paginate(10);
        dd($data);
        return view('welcome', $data);
    }
}
