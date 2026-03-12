@extends('layouts.app')

@section('content')
    <a href="/" class="text-blue-500 hover:underline">← Retour</a>

    <h2 class="text-xl font-semibold my-4">Réservations — {{ $room->name }}</h2>

    @if($reservations->isEmpty())
        <p class="text-gray-500">Aucune réservation pour cette salle.</p>
    @else
        <table class="w-full bg-white rounded shadow">
            <thead class="bg-gray-200">
                <tr>
                    <th class="p-3 text-left">Réservant</th>
                    <th class="p-3 text-left">Date</th>
                    <th class="p-3 text-left">Début</th>
                    <th class="p-3 text-left">Fin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservations as $reservation)
                    <tr class="border-t">
                        <td class="p-3">{{ $reservation->reserver_name }}</td>
                        <td class="p-3">{{ $reservation->date }}</td>
                        <td class="p-3">{{ $reservation->start_time }}</td>
                        <td class="p-3">{{ $reservation->end_time }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

    <div class="mt-4">
        <a href="/rooms/{{ $room->id }}"
           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            + Nouvelle réservation
        </a>
    </div>
@endsection