<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $futureReservations = Reservation::where('user_id', $user->id)
            ->where('reservation_date', '>', now())
            ->orderBy('reservation_date', 'asc')
            ->get();

        $pastReservations = Reservation::where('user_id', $user->id)
            ->where('reservation_date', '<', now())
            ->orderBy('reservation_date', 'desc')
            ->get();

        return view('dashboard.index', compact('futureReservations', 'pastReservations'));
    }

    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);

        if (Auth::id() !== $reservation->user_id) {
            abort(403);
        }

        return view('dashboard.show', compact('reservation'));
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);

        if (Auth::id() !== $reservation->user_id) {
            abort(403);
        }

        $reservation->delete();
        return redirect()->route('dashboard.index')->with('success', 'Réservation annulée avec succès.');
    }
}
