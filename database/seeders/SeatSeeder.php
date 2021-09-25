<?php

namespace Database\Seeders;

use App\Models\Movie;
use App\Models\Seat;
use Illuminate\Database\Seeder;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seat::truncate();
        for ($i= 31;$i<=40 ; $i++){
            Seat::create([
                'number' => $i
            ]);
        }
    }
}
