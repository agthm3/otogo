<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Route;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.home.index');
    }
    public function showJalur(){
        $routes = Route::all();
        return view('dashboard.jalur.index', compact('routes'));
    }
    public function showPendingDriver(){
        return view('dashboard.driver.pending');
    }

    public function showAllDriver(){
        $allDriver = User::where('role', 'driver')->get();
        return view('dashboard.driver.index', compact('allDriver'));
    }
    public function showReportDriver(){
        return view('dashboard.driver.report');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createJalur(){
        return view('dashboard.jalur.create');
    }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
