@extends('layouts.app')

@section('content')
    <a href="/" class="text-blue-500 hover:underline">← Retour</a>

    <h2 class="text-xl font-semibold my-4">Réserver {{ $room->name }}</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-4">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="/rooms/{{ $room->id }}" method="POST" class="bg-white rounded shadow p-6">
        @csrf

        <div class="mb-4">
            <label class="block font-medium mb-1">Nom du réservant</label>
            <input type="text" name="reserver_name" value="{{ old('reserver_name') }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Date</label>
            <input type="date" name="date" value="{{ old('date') }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Heure de début</label>
            <input type="time" name="start_time" value="{{ old('start_time') }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block font-medium mb-1">Heure de fin</label>
            <input type="time" name="end_time" value="{{ old('end_time') }}"
                   class="w-full border rounded px-3 py-2">
        </div>

        <button type="submit"
                class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
            Confirmer la réservation
        </button>
    </form>
@endsection