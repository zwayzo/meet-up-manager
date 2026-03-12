<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'room_id',
        'reserver_name',
        'date',
        'start_time',
        'end_time'
    ];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}