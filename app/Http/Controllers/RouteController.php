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
        $request->validate([
            'name' => 'required',
            'route_code' => 'required',
            'route_color' => 'required',
            'description' => 'nullable',
            'logo' => 'nullable|image',
            'streets' => 'nullable'
        ]);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        } else {
            $logoPath = null;
        }

        $route = Route::create([
            'name' => $request->name,
            'route_code' => $request->route_code,
            'route_color' => $request->route_color,
            'description' => $request->description,
            'logo' => $logoPath
        ]);

        if ($request->streets) {
            $streets = explode(',', $request->streets);
            foreach ($streets as $streetName) {
                $street = Street::firstOrCreate(['name' => trim($streetName)]);
                $route->streets()->attach($street->id);
            }
        }

        return redirect()->route('jalur.index');
    }

    public function show($id)
    {
        $route = Route::with('streets')->findOrFail($id);
        return view('dashboard.jalur.show', compact('route'));
    }

    public function edit($id)
    {
        $route = Route::with('streets')->findOrFail($id);
        return view('dashboard.jalur.edit', compact('route'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'route_code' => 'required',
            'route_color' => 'required',
            'description' => 'nullable',
            'logo' => 'nullable|image',
            'streets' => 'nullable'
        ]);

        $route = Route::findOrFail($id);

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
        } else {
            $logoPath = $route->logo;
        }

        $route->update([
            'name' => $request->name,
            'route_code' => $request->route_code,
            'route_color' => $request->route_color,
            'description' => $request->description,
            'logo' => $logoPath
        ]);

        $route->streets()->detach();

        if ($request->streets) {
            $streets = explode(',', $request->streets);
            foreach ($streets as $streetName) {
                $street = Street::firstOrCreate(['name' => trim($streetName)]);
                $route->streets()->attach($street->id);
            }
        }

        return redirect()->route('jalur.index');
    }

    public function destroy($id)
    {
        $route = Route::findOrFail($id);
        $route->streets()->detach();
        $route->delete();

        return redirect()->route('jalur.index');
    }
}
