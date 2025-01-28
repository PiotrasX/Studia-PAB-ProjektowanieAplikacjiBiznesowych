<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Hotel;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Http\Resources\RoomCollection;
use App\Http\Resources\RoomResource;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($hotelId)
    {
        $hotel = Hotel::findOrFail($hotelId);
        $rooms = Room::where('hotel_id', $hotel->id)->get();
        return new RoomCollection($rooms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request, $hotelId)
    {
        $hotel = Hotel::findOrFail($hotelId);
        $room = new Room($request->validated());
        $room->hotel_id = $hotel->id;
        $room->save();
        return new RoomResource($room);
    }

    /**
     * Display the specified resource.
     */
    public function show($roomId)
    {
        $room = Room::findOrFail($roomId);
        return new RoomResource($room);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, $roomId)
    {
        $room = Room::findOrFail($roomId);
        $room->update($request->validated());
        return new RoomResource($room);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($roomId)
    {
        $room = Room::findOrFail($roomId);
        $room->delete();
        return response()->json(null, 204);
    }
}
