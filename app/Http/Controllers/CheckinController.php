<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class CheckinController extends Controller
{
    public function get(Request $request)
    {
        $hotel = Hotel::findOrFail($request->input('hotel'));
        return view('pages.checkin', [
            'hotel' => $hotel,
        ]);
    }
}
