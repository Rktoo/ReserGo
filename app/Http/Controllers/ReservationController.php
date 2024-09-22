<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('service')->get();
        return view('reservations.index', compact('reservations'));
    }
    public function create(Service $service, $serviceId = null)
    {
        $services = Service::all();

        if ($serviceId) {
            $service = Service::find($serviceId);
            return view("reservations.create", compact('service', 'services'));
        }

        return view('reservations.create', compact('services'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_id' => 'required|exists:services,id|not_in:-1', // Vérifie que le service existe et n'est pas l'option par défaut
            'reservation_date' => 'required|date|after:now', // Date de réservation doit être future
        ]);

        Reservation::create([
            'service_id' => $validated['service_id'],
            'customer_name' => Auth::user()->name,
            'customer_email' => Auth::user()->email,
            'reservation_date' => $validated['reservation_date'],
        ]);

        return redirect()->route('reservations.index')->with('success', 'Réservation effectuée avec succès!');
    }
}
