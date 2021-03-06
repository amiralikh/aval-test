<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable=['user_id','seat_id','movie_id'];

    public function seat()
    {
        return $this->belongsTo(Seat::class,'seat_id');
    }
}
