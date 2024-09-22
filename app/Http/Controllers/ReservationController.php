<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('service')->get();
        return view('reservations.index', compact('reservations'));
    }
    public function create()
    {
        $services = Service::all();
        return view('reservations.create', compact('services'));
    }
    public function store()
    {

    }
}
