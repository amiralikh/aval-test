<?php

namespace App\Repository;

use App\Models\Ticket;

class TicketRepo
{
    /**
     * @param $user_id
     * @param $movie
     * @param $seat
     */
    public function ticketGenerator($user_id, $movie, $seat): void
    {
        Ticket::create([
            'user_id' => $user_id,
            'movie_id' => $movie,
            'seat_id' => $seat
        ]);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */

    public function getTickets()
    {
        return Ticket::with('seat')->orderByDesc('seat_id')->get()->groupBy('seat_id');
    }
}
