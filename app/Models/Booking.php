<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'pet_id', 'room_id', 'check_in_date', 'check_out_date', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}

