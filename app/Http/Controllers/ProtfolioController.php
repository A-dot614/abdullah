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
        return view('site.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function contact()
    {
        return view('site.contact');
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
        return view('site.detail');
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

    public function services()
    {
        return view('site.service');
    }

    public function about()
    {
        return view('site.about');
    }

    public function projects()
    {
        $projects = Protfolio::all();
        return view('site.project', ['projects' => $projects]);
    }

    public function booking()
    {
        return view('site.booking');
    }


}
