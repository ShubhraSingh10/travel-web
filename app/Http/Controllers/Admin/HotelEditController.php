<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HotelAddRequest;

class HotelEditController extends Controller
{
    public function get($id)
    {
        $hotel = Hotel::findOrfail($id);
        return view('pages.admin.hotels.edit', [
            'hotel' => $hotel,
        ]);
    }
    
    public function post($id, HotelAddRequest $request)
    {
        $hotel = Hotel::findOrfail($id);
        $hotel->name = $request->input('name');
        $hotel->description = $request->input('description');
        $hotel->save();
        return redirect()->route('admin.hotels');
    }
}
