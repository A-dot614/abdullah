<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProtfolioRequest;
use App\Http\Requests\UpdateProtfolioRequest;
use App\Models\Protfolio;

class ProtfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
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
    public function store(StoreProtfolioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Protfolio $protfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Protfolio $protfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProtfolioRequest $request, Protfolio $protfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Protfolio $protfolio)
    {
        //
    }
}
