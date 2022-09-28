<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Room;
use App\Models\Hotel;

class RoomControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

     /* create room*/

    public function test_room_can_be_created()
    {
        $this->withoutExceptionHandling();
        $response = $this->postJson('/api/room', [
          'amount' => 100,
          'type_room' => 'junior',
          'accommodation' => 'double',
          'hotel_id'=>Hotel::factory()->create()->id,
        ])->assertCreated();

        $room = Room::first();

        $this->assertCount(1, Room::all());

        $this->assertEquals('100', $room->amount);
        $this->assertEquals('junior', $room->type_room);
        $this->assertEquals('double', $room->accommodation);



        $response->assertJson([
            'data' => [
                'type' => 'room',
                'room_id' => $room->id,
                'attributes' => [
                    'amount' => $room->amount,
                    'type_room' => $room->type_room,
                    'accommodation' => $room->accommodation,
                    'hotel_id'=>[
                        'data'=>[
                        'hotel_id'=>$room->hotel->id,
                        ]
                        ],
                ],
               
            ],
          
        ]);
    }
   
}
