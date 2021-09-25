<?php

namespace App\Helpers;

use App\Models\Ticket;

class ReserveHelper
{
    public static function validateSeat($movie_id , $seat_id)
    {
        return Ticket::where(['movie_id'=>$movie_id,'seat_id'=>$seat_id])->first();
    }
}
