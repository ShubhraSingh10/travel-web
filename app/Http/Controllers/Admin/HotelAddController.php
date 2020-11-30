<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HotelAddRequest;
use App\Models\Hotel;

class HotelAddController extends Controller
{
    public function get()
    {
        return view('pages.admin.hotels.add');
    }
    
    public function post(HotelAddRequest $request)
    {
        $hotel = new Hotel();
        $hotel->name = $request->input('name');
        $hotel->description = $request->input('description');
        $hotel->city = $request->input('city');
        $hotel->category = $request->input('category');
        $hotel->price = $request->input('price');
        $hotel->rating = $request->input('rating');
        $hotel->ac = $request->has('ac') ? '1': '0';
        $hotel->wifi = $request->has('wifi') ? '1': '0';
        $hotel->tv = $request->has('tv') ? '1': '0';
        $images = [];
        if($request->has('images')) {
            foreach($request->images as $image) {
                array_push($images, $image->store('hotels'));
            }
        }
        $hotel->images = $images;
        $hotel->save();
        return redirect()->route('admin.hotels');
    }
}
