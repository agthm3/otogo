<?php

namespace App\Http\Controllers;

use App\Models\direction;
use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\Street;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $routes = Route::all();
        return view('pages.directions.index', compact('routes'));
    }
    public function searchRoutes(Request $request)
    {
        $streetName = $request->input('street_name');
        $streets = Street::where('name', 'LIKE', '%' . $streetName . '%')->pluck('id')->toArray();
        $routes = Route::whereHas('streets', function ($query) use ($streets) {
            $query->whereIn('street_id', $streets);
        })->get();

        return view('pages.payment.index', compact('routes', 'streetName'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $route = Route::with(['streets' => function($query) {
            $query->orderBy('pivot_type');
        }])->findOrFail($id);

        $departStreets = $route->streets->where('pivot.type', 'depart');
        $returnStreets = $route->streets->where('pivot.type', 'return');

        return view('pages.directions.show', compact('route', 'departStreets', 'returnStreets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(direction $direction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, direction $direction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(direction $direction)
    {
        //
    }
}
