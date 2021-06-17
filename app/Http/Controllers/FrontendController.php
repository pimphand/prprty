<?php

namespace App\Http\Controllers;

use App\Models\FeaturedProduct;
use App\Models\Message;
use App\Models\News;
use App\Models\Property;
use App\Models\PropertyCategory;
use App\Models\PropertyImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Input;

class FrontendController extends Controller
{
    public function index()
    {
        $endpoint = 'live';
        $access_key = '92ab1bae7abc2b560a41fe99cc628447';

        // Initialize CURL:
        $ch = curl_init('http://api.currencylayer.com/' . $endpoint . '?access_key=' . $access_key . '');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        $exchangeRates = json_decode($json, true);
        // dd($exchangeRates);
        $services = $exchangeRates['quotes']['USDIDR'];
        // Access the exchange rate values, e.g. GBP:
        // echo $exchangeRates['quotes'][''];
        $data = $services * 1;


        $prop = Property::latest()->get();
        $p = Property::orderBy('views', 'DESC')->limit(10)->get();
        $featured = FeaturedProduct::where('status', 0)->limit(3)->get();
        return view('frontend.home')->with([
            'prop' => $prop,
            'featured' => $featured,
            'view' => $p,
            // 'data' => $,
        ]);
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'messages' => 'required|string',
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->messages;
        $message->save();

        return redirect()->back();
    }

    public function search(Request $request)
    {

        $category = PropertyCategory::all();
        $postsInRange = Property::where('name', 'like', '%' . $request->name . '%')
            ->Orwhere('city', 'like', '%' . $request->name . '%')
            ->Orwhere('province', 'like', '%' . $request->name . '%')
            ->Orwhere('price', '<=' . $request->price)
            // ->Orwhere('status', '=' . $request->status)
            ->get();

        // dd($postsInRang1, $postsInRange);
        return view('frontend.cari', [
            'data' => $postsInRange,
            // 'data' => $postsInRang1,
            'category' => $category,
        ]);
    }

    public function about()
    {
        $prop = Property::limit(5)->get();
        return view('frontend.about')->with([
            'prop' => $prop,
        ]);
    }

    public function details($id)
    {
        Property::find($id)->increment('views');
        $data = Property::find($id);
        $propertyImage = PropertyImage::where('property_id', $data->id)->get();
        $similar = Property::where('category_id', '=', $id)->limit(3)->latest()->get();
        return view('frontend.detail', [
            'image' => $propertyImage,
            'prop' => $data,
            'similar' => $similar,
        ]);
    }

    public function propety()
    {
        $prop['prop'] = Property::paginate(12);
        return view('frontend.product', $prop);
    }

    public function news()
    {
        $data['news'] = News::latest()->get();
        return view('frontend.news', $data);
    }

    public function newsdetail($id)
    {
        News::find($id)->increment('views');
        $news['news'] = News::find($id);
        return view('frontend.newsdetail', $news);
    }
}
