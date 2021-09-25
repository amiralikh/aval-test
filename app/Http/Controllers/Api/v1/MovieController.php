<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\ReserveHelper;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Seat;
use App\Models\Ticket;
use App\Repository\MoviesRepo;
use App\Repository\TicketRepo;
use Illuminate\Support\Facades\App;

class MovieController extends Controller
{
    public function showList()
    {
        $movie_repo = App::make(MoviesRepo::class);
        $movies = $movie_repo->getMovies();
        return response()->json($movies);

    }

    public function availableSeats()
    {
        \request()->validate([
            'movie_id' => 'required|exists:movies,id',
        ]);
        $movie_repo = App::make(MoviesRepo::class);
        $movie_id = \request('movie_id');
        $taken_seats_array = $movie_repo->takenSeats($movie_id);
        $available_seats = $movie_repo->getAvailable_seats($taken_seats_array);
        return response()->json($available_seats);
    }

    public function reservation()
    {
        \request()->validate([
            'movie_id' => 'required|exists:movies,id',
            'seat_id' => 'required|exists:seats,id',
        ]);
        $ticket_repo = App::make(TicketRepo::class);
        $seat = request('seat_id');
        $movie = request('movie_id');
        $user = request()->user();
        $taken = ReserveHelper::validateSeat($movie,$seat);
        if (!$taken) {
            $ticket_repo->ticketGenerator($user->id, $movie, $seat);
            return response()->json('reservation was successful');
        } else {
            return response()->json('this seat is already taken');
        }
    }




}
