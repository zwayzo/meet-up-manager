<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    public function create(Room $room)
    {
        return view('rooms.create', compact('room'));
    }

    public function store(Request $request, Room $room)
    {
        $validated = $request->validate([
            'reserver_name' => 'required|string|max:255',
            'date'          => 'required|date',
            'start_time'    => 'required',
            'end_time'      => 'required|after:start_time',
        ]);

        $overlap = Reservation::where('room_id', $room->id)
            ->where('date', $validated['date'])
            ->where(function ($query) use ($validated) {
                $query->where('start_time', '<', $validated['end_time'])
                      ->where('end_time', '>', $validated['start_time']);
            })
            ->exists();

        if ($overlap) {
            return back()
                ->withErrors(['overlap' => 'Cette salle est déjà réservée sur ce créneau.'])
                ->withInput();
        }

        Reservation::create([
            'room_id'       => $room->id,
            'reserver_name' => $validated['reserver_name'],
            'date'          => $validated['date'],
            'start_time'    => $validated['start_time'],
            'end_time'      => $validated['end_time'],
        ]);

        return redirect('/')->with('success', 'Réservation confirmée !');
    }

    public function reservations(Room $room)
    {
        $reservations = $room->reservations()
                             ->orderBy('date')
                             ->orderBy('start_time')
                             ->get();
        return view('rooms.reservations', compact('room', 'reservations'));
    }
}