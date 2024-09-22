<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'], // Autorise les décimales avec 1 ou 2 chiffres après la virgule
        ]);

        Service::create($request->only('name', 'description', 'price'));

        return redirect()->route('services.index')->with('success', 'Service créé avec succès.');
    }
}
