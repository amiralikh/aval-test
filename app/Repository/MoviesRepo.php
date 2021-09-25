<?php

namespace App\Repository;

use App\Models\Movie;
use App\Models\Seat;
use App\Models\Ticket;

class MoviesRepo
{
    public function getMovies()
    {
        return Movie::select('id','title','release_year','play_time','show_date')->orderBy('play_time','desc')->get();
    }


    public function takenSeats($movie_id)
    {
        return Ticket::where('movie_id', $movie_id)->select('seat_id')->get()->toArray();
    }


    public function getAvailable_seats($taken_seats_array)
    {
        return Seat::query()->whereNotIn('id', $taken_seats_array)->select('id', 'number')->get();
    }

}
