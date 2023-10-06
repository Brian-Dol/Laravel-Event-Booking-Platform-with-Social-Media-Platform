<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    function bookings(){
        return $this->hasMany(Booking::class);

    }

    use \Illuminate\Auth\Authenticatable;
    function posts()
    {
        return $this->hasMany(Post::class);
    }

    function likes()
    {
        return $this->hasMany(Like::class);
    }
}
