<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\Hotel as HotelRequests;
use App\Http\Resources\Hotel as HotelResources;
use App\Http\Resources\HotelCollection;

class HotelController extends Controller
{

    protected $hotel;

    public function __construct (Hotel $hotel) 
    {
        $this->hotel = $hotel;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::all();

        return new HotelCollection ($hotel);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HotelRequests $request)
    {
        $hotel = $this->hotel->create($request->all());

        return response()->json(new HotelResources($hotel),201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return new HotelResources($hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hotel $hotel)
    {
        $hotel->update($request->all());

        return response()->json(new HotelResources($hotel),200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        //
    }
}
