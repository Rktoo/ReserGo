<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [AdminMiddleware::class];
    }
    public function index()
    {
        $services = Service::orderBy('created_at', 'desc')->get();
        return view('services.index', compact('services'));
    }

    public function create()
    {
        return view('services.create');
    }

    public function store(Request $request)
    {
        $this->validateRequest($request, true);

        $imagePath = $this->handleImageUpload($request);

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
    public function update(Request $request, $id)
    {
        $this->validateRequest($request, false);

        $service = Service::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($service->image_url) {
                Storage::disk('public')->delete($service->image_url);
            }
            $imagePath = $this->handleImageUpload($request);
        } else {
            $imagePath = $service->image_url;
        }

        $service->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'price' => $request['price'],
            'image_url' => $imagePath,
        ]);

        return redirect()->route('services.index')->with('success', 'Service mis à jour avec succès.');
    }

    private function validateRequest(Request $request, bool $isCreating)
    {
        $rules = [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => ['required', 'regex:/^\d+(\.\d{1,2})?$/'],
        ];
        if ($isCreating) {
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024';
        } else {
            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:1024';
        }

        $request->validate($rules);
    }

    private function handleImageUpload(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            return $image->storeAs('images/services', $imageName, 'public');
        }

        return null;
    }


    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if (!$service) {
            return abort(403);
        }

        $service->delete();
        return redirect()->route('services.index')->with('success', 'Service supprimé avec succès.');
    }
}
