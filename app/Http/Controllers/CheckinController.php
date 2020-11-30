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
        $booking = new Booking();
        $booking->hotel_id = $request->input('hotel_id');
        $booking->user_id = Auth::user()->id;
        $booking->no_guest = $request->input('no_guest');
        $booking->no_room = $request->input('no_room');
        $booking->checkin_date = $request->input('checkin_date');
        $booking->checkin_time = $request->input('checkin_time');
        $booking->checkout_date = $request->input('checkout_date');
        $booking->checkout_time = $request->input('checkout_time');
        $booking->save();
        return redirect('/');
    }
}
