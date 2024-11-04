<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['room_name', 'room_type', 'price_per_night', 'status', 'image'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
