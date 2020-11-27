<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CheckinRequest;

class CheckinController extends Controller
{
    public function get(Request $request)
    {
        $hotel = Hotel::findOrFail($request->input('hotel'));
        return view('pages.checkin', [
            'hotel' => $hotel,
        ]);
    }

    public function post(CheckinRequest $request)
    {
        $hotel = new Booking();
        $hotel->hotel_id = $request->input('hotel_id');
        $hotel->user_id = Auth::user()->id;
        $hotel->no_guest = $request->input('no_guest');
        $hotel->no_room = $request->input('no_room');
        $hotel->checkin_date = $request->input('checkin_date');
        $hotel->checkin_time = $request->input('checkin_time');
        $hotel->checkout_date = $request->input('checkout_date');
        $hotel->checkout_time = $request->input('checkout_time');
        $hotel->save();
        return redirect('/');
    }
}
