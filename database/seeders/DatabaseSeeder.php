<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hotel;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /* crear hotel */
        Hotel::factory()->create([
            'name' => 'Hotel test',
            'city' => 'Bogota',
            'num_rooms' => 10,
            'adress' => 'calle 1',
            'nit' => '123456789',
        ]);

        Hotel::factory()->create([
            'name' => 'Hotel test 2',
            'city' => 'ibague',
            'num_rooms' => 2,
            'adress' => 'calle 1',
            'nit' => '1234546789',
        ]);
    }
}
