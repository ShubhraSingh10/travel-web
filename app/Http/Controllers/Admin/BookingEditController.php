<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingEditController extends Controller
{
    public function get(Booking $booking)
    {
        return view('pages.admin.bookings.edit', [
            'booking' => $booking,
        ]);
    }

    public function post(Booking $booking, Request $request)
    {
        $booking->no_guest = $request->input('no_guest');
        $booking->no_room = $request->input('no_room');
        $booking->checkin_date = $request->input('checkin_date');
        $booking->checkin_time = $request->input('checkin_time');
        $booking->checkout_date = $request->input('checkout_date');
        $booking->checkout_time = $request->input('checkout_time');
        $booking->save();
        return redirect()->route('admin.bookings');
    }

}
