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
        $hotel->save();
        return redirect()->route('admin.hotels');
    }
}
