<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Route;
use App\Models\Street;

class RouteController extends Controller
{
    public function index()
    {
        $routes = Route::all();
        return view('dashboard.jalur.index', compact('routes'));
    }

    public function create()
    {
        return view('dashboard.jalur.create');
    }

    public function store(Request $request)
    {
        $route = Route::create($request->only('name', 'route_code', 'route_color', 'description'));

        $departStreets = explode(',', $request->depart);
        $returnStreets = explode(',', $request->return);

        foreach ($departStreets as $streetName) {
            $street = Street::firstOrCreate(['name' => trim($streetName)]);
            $route->streets()->attach($street->id, ['type' => 'depart']);
        }

        foreach ($returnStreets as $streetName) {
            $street = Street::firstOrCreate(['name' => trim($streetName)]);
            $route->streets()->attach($street->id, ['type' => 'return']);
        }

        return redirect()->route('jalur.index')->with('success', 'Jalur berhasil ditambahkan');
    }

    public function show($id)
    {
        $route = Route::findOrFail($id);
        $departStreets = $route->streets()->wherePivot('type', 'depart')->get();
        $returnStreets = $route->streets()->wherePivot('type', 'return')->get();

        return view('dashboard.jalur.show', compact('route', 'departStreets', 'returnStreets'));
    }

    public function edit($id)
    {
        $route = Route::findOrFail($id);
        $departStreets = $route->streets()->wherePivot('type', 'depart')->pluck('name')->toArray();
        $returnStreets = $route->streets()->wherePivot('type', 'return')->pluck('name')->toArray();

        return view('dashboard.jalur.edit', compact('route', 'departStreets', 'returnStreets'));
    }

    public function update(Request $request, $id)
    {
        $route = Route::findOrFail($id);
        $route->update($request->only('name', 'route_code', 'route_color', 'description'));

        $route->streets()->detach();

        $departStreets = explode(',', $request->depart);
        $returnStreets = explode(',', $request->return);

        foreach ($departStreets as $streetName) {
            $street = Street::firstOrCreate(['name' => trim($streetName)]);
            $route->streets()->attach($street->id, ['type' => 'depart']);
        }

        foreach ($returnStreets as $streetName) {
            $street = Street::firstOrCreate(['name' => trim($streetName)]);
            $route->streets()->attach($street->id, ['type' => 'return']);
        }

        return redirect()->route('jalur.index')->with('success', 'Jalur berhasil diperbarui');
    }

    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->delete();

        return redirect()->route('jalur.index')->with('success', 'Jalur berhasil dihapus');
    }
}
