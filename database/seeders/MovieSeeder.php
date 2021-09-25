<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Movie::truncate();
        $movies=[
            [
                'title' => 'Children of heaven',
                'release_year' => '1997',
                'play_time' => '2018/4/20',
                'show_date' => '22:00',
            ],
            [
                'title' => 'About Elly',
                'release_year' => '2009',
                'play_time' => '2018/4/20',
                'show_date' => '20:00',
            ],
            [
                'title' => 'A separation',
                'release_year' => '2011',
                'play_time' => '2018/4/22',
                'show_date' => '18:00',
            ],
            [
                'title' => 'The salesman',
                'release_year' => '2016',
                'play_time' => '2018/4/21',
                'show_date' => '18:00',
            ],
            [
                'title' => 'The Elephant king ',
                'release_year' => '2017',
                'play_time' => '2018/4/21',
                'show_date' => '20:00',
            ],
        ];
        foreach($movies as $movie)
        {
            Movie::create([
                'title' => $movie['title'],
                'release_year' => $movie['release_year'],
                'play_time' => $movie['play_time'],
                'show_date' => $movie['show_date']

            ]);
        }

    }
}
