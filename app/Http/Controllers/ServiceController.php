<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class ServiceController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [new Middleware(AdminMiddleware::class, except: ['index'])];
    }
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
            'description' => 'required|string',
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'], // Autorise les décimales avec 1 ou 2 chiffres après la virgule
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024',
        ]);
        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images/services', $imageName, 'public');
        }
        Service::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image_url' => $imagePath
        ]);

        return redirect()->route('services.index')->with('success', 'Service créé avec succès.');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('services.edit', ['service' => $service]);
    }
}
