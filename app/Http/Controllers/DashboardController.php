<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\News;
use App\Models\Property;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $nv = News::sum('views') + Property::sum('views');
        $prop = Property::count();
        $news = News::count();
        $message = Message::latest()->limit(5)->get();
        return view('admin.dashboard')->with([
            'prop' => $prop,
            'view' => $nv,
            'berita' => $news,
            'message' => $message
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
