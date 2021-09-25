<?php

namespace App\Http\Controllers\Api\v1;

use App\Helpers\ReserveHelper;
use App\Http\Controllers\Controller;
use App\Models\Ticket;
use App\Repository\MoviesRepo;
use App\Repository\TicketRepo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class StatisticController extends Controller
{
    public function seats()
    {
        $ticket_repo = App::make(TicketRepo::class);
        $tickets = $ticket_repo->getTickets();
        $statistics = ReserveHelper::statisticGenerator($tickets);
        return response()->json($statistics);
    }


}
