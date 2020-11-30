<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function get()
    {
        return view('pages.admin.hotels.hotels');
    }
    public function delete(Hotel $hotel)
    {
        $hotel->forceDelete();
        return redirect()->route('admin.hotels');
    }
}
