<?php

namespace App\Http\Controllers;

use App\Http\Middleware\AdminMiddleware;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware(AdminMiddleware::class, only: ["index", "destroy"])
        ];
    }
    public function index()
    {
        $reservations = Reservation::with('service')->orderBy('reservation_date', 'asc')->get();

        return view('reservations.index', compact('reservations'));
    }
    public function create(Service $service, $serviceId = null)
    {
        $services = Service::all();
        $users = User::all();
        if ($serviceId) {
            $service = Service::find($serviceId);
            return view("reservations.create", compact('service', 'services'));
        }

        return view('reservations.create', compact('services', 'users'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id|not_in:-1', // Vérifie que le service existe et n'est pas l'option par défaut
            'reservation_date' => 'required|date|after:now', // Date de réservation doit être future
            'user' => 'nullable|exists:users,id'
        ]);
        // dd($validated['reservation_date']);
        // dd($validated['service_id']);
        $userId = Auth::id();

        // Vérifiez que l'utilisateur est bien authentifié
        if (!$userId) {
            return redirect()->route('login')->withErrors('Vous devez être connecté pour réserver.');
        }

        if (Auth::user()->role === 'admin' && $request->filled('user')) {
            $userId = $request->input('user');
        }

        $existingReservation = Reservation::where('service_id', $validated['service_id'])
            ->where('user_id', $userId)
            ->whereDate('reservation_date', Carbon::parse($validated['reservation_date'])->format('Y-m-d'))
            ->first();

        if ($existingReservation) {
            return back()->withErrors(['reservation_date' => 'Vous avez déjà réservé ce service à cette date.']);
        }

        Reservation::create([
            'service_id' => $validated['service_id'],
            'user_id' => $userId,
            'reservation_date' => $validated['reservation_date'],
        ]);

        return redirect()->route('dashboard.index')->with('success', 'Réservation effectuée avec succès!');
    }

    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, $id)
    {
        $reservation = Reservation::findOrFail($id);
        $validated = $request->validate([
            'reservation_date' => 'required|date|after:now',
        ]);

        $userId = Auth::id();
        $existingReservation = Reservation::where('service_id', $reservation->service_id)
            ->where('user_id', $userId)
            ->whereDate('reservation_date', Carbon::parse($validated['reservation_date'])->format('Y-m-d'))
            ->first();

        if ($existingReservation) {
            return back()->withErrors(['reservation_date' => 'Cette date est déjà réservée.']);
        }

        $reservation = Reservation::findOrFail($id);
        $reservation->reservation_date = $validated['reservation_date'];
        $reservation->save();

        return redirect()->route('dashboard.index')->with('success', 'Réservation mise à jour avec succès!');
    }


    // Suppression d'une réservation
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);

        //Autorise uniquement l'admin à faire un delete suite à une demande particulière
        if (Auth::user()->role === 'admin') {
            $reservation->delete();
            return redirect()->route('reservations.index')->with('success', 'Réservation supprimé avec succès.');
        }

        abort(401);
    }
}
