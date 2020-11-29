<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;
    
    protected $dates = ['checkin_date', 'checkout_date'];
    
    public function hotel()
    {
        return $this->belongsTo('App\Models\Hotel');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    
    public function checkinTimeFormated()
    {
        return Carbon::createFromFormat('H:i:s', $this->checkin_time)->format('g:i A');
    }
    
    public function checkoutTimeFormated()
    {
        return Carbon::createFromFormat('H:i:s', $this->checkout_time)->format('g:i A');
    }
}
