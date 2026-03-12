@extends('layouts.app')

@section('content')
    <h2 class="text-xl font-semibold mb-4">Salles disponibles</h2>

    @foreach($rooms as $room)
        <div class="bg-white rounded shadow p-4 mb-4 flex justify-between items-center">
            <span class="text-lg">{{ $room->name }}</span>
            <div class="flex gap-2">
                <a href="/rooms/{{ $room->id }}"
                   class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Réserver
                </a>
                <a href="/rooms/{{ $room->id }}/reservations"
                   class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
                    Voir réservations
                </a>
            </div>
        </div>
    @endforeach
@endsection