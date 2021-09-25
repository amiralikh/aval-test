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
}
