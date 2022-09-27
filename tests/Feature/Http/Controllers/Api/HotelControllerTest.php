<?php

namespace Tests\Feature\Http\Controllers\Api;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Hotel;

class HotelControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /*  test create hotel */
    public function test_hotel_can_be_created()
    {
        $this->withoutExceptionHandling();
        $response = $this->postJson('/api/hotel', [
            'name' => 'decameron',
            'city' => 'cartagena',
            'num_rooms' => 5,
            'adress' => 'calle 1',
            'nit' => '123456789',
        ])->assertCreated();

        $hotel = Hotel::first();

        $this->assertCount(1, Hotel::all());

        $this->assertEquals('decameron', $hotel->name);
        $this->assertEquals('cartagena', $hotel->city);
        $this->assertEquals(5, $hotel->num_rooms);
        $this->assertEquals('calle 1', $hotel->adress);
        $this->assertEquals('123456789', $hotel->nit);
        


        $response->assertJson([
            'data' => [
                'type' => 'hotel',
                'hotel_id' => $hotel->id,
                'attributes' => [
                    'name' => $hotel->name,
                    'city' => $hotel->city,
                    'num_rooms' => $hotel->num_rooms,
                    'adress' => $hotel->adress,
                    'nit' => $hotel->nit,
                  
                ]
            ],
        ]);
    }

}
