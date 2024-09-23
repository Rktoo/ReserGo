<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function edit()
    {
        return view('dashboard.edit', ['user' => Auth::user()]);
    }

    public function updateName(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $user = Auth::user();
        $user->name = $request->input('name');
        $user->save();

        return redirect()->back()->with('success', 'Nom mis à jour avec succès.');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = Auth::user();
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès.');
    }

    // Suppression du compte de l'utilisateur
    public function destroyAccount()
    {
        $user = Auth::user();
        $user->delete();
        Auth::logout();

        return redirect('/')->with('success', 'Votre compte a bien été supprimé');
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
