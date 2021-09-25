<?php

namespace App\Helpers;

use App\Models\Ticket;

class ReserveHelper
{
    public static function validateSeat($movie_id , $seat_id)
    {
        return Ticket::where(['movie_id'=>$movie_id,'seat_id'=>$seat_id])->first();
    }

    public static function statisticGenerator($tickets)
    {
        $statistics = [];
        foreach ($tickets as $ticket){
            $tmp['seat_number'] = $ticket[0]->seat->number;
            $tmp['total'] = sizeof($ticket);
            array_push($statistics,$tmp);
        }
        return $statistics;
    }
}
