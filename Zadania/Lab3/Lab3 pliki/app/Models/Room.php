<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'name', 'occupancy', 'price'];

    /**
     * Finds a room based on hotel and room ID
     *
     * @param  int  $hotelId
     * @param  int  $roomId
     * @return \App\Models\Room
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public static function findInHotel($hotelId, $roomId)
    {
        $hotel = Hotel::findOrFail($hotelId);
        return self::where('hotel_id', $hotel->id)->findOrFail($roomId);
    }

}
