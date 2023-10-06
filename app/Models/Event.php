<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    function Eventtype(){
        return $this->belongsTo(EventType::class, 'event_type_id');
    }

    function eventimages(){
        return $this->hasMany(Eventimage::class, 'event_id');

    }

    function bookings(){
        return $this->hasMany(Booking::class);

    }
}
