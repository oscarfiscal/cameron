<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\Room as RoomRequests;
use App\Http\Resources\Room as RoomResources;

class RoomController extends Controller
{

    protected $room;

    public function __construct (Room $room) 
    {
        $this->room = $room;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomRequests  $request)
    {
        
      $hotel = Hotel::where('id',$request->hotel_id)->first();

      /*cosultar las rooms de es hotel */

        $rooms = Room::where('hotel_id',$hotel->id)->get();

        $rooms = $hotel->rooms->sum('amount');
    
        if($hotel->num_rooms <= $rooms){
            return response()->json(['message'=>'Habitaciones Ocupadas'],400);
        }else{
            $room = $this->room->create($request->all());
            return response()->json(new RoomResources($room),201);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
