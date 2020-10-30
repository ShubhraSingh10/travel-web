<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    public function get()
    {
        return view('pages.admin.hotels.hotels');
    }
}
