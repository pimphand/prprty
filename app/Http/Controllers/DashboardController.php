<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Property;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $sos = SocialMedia::all();
        $sosial = SocialMedia::count();
        $prop = Property::count();
        $news = News::count();
        return view('admin.dashboard')->with([
            'sos' => $sos,
            'sosial' => $sosial,
            'prop' => $prop,
            'berita' => $news,
        ]);
    }

    public function store(Request $request)
    {
        $property = new SocialMedia();
        $property->icon = $request->icon;
        $property->name = $request->name;
        $property->link = $request->link;
        $property->save();

        return redirect()->back();
    }

    public function update(Request $request, $id)
    {
        $property = SocialMedia::find($id);
        $property->icon = $request->icon;
        $property->name = $request->name;
        $property->link = $request->link;
        $property->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        $property = SocialMedia::find($id);
        $property->delete();

        return redirect()->back();
    }
}
