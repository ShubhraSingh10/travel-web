<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingsController extends Controller
{
    public function get()
    {
        return view('pages.admin.bookings.bookings');
    }

    public function delete(Booking $booking)
    {
        $booking->forceDelete();
        return redirect()->route('admin.bookings');
    }
}
