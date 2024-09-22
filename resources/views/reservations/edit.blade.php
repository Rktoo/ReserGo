@extends('layouts.app')

@section('content')
    <h2>Modifier la Réservation</h2>
    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="reservation_date">Nouvelle Date de Réservation:</label>
            <input id="reservation_date" type="datetime-local" name="reservation_date" required
                value="{{ $reservation->reservation_date }}">
        </div>
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
