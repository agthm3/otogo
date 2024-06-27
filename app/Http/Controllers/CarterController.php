<?php

namespace App\Http\Controllers;

use App\Models\Carter;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.carter.index');
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
    public function show(Carter $carter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carter $carter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carter $carter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carter $carter)
    {
        //
    }
}
