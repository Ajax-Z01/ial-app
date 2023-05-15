<?php

namespace App\Http\Controllers;

use App\Models\Optic;
use App\Http\Requests\StoreOpticRequest;
use App\Http\Requests\UpdateOpticRequest;

class OpticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $optic = new Optic();
        $optic = $optic->get();
        return view('optic', compact('optic'));
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
    public function store(StoreOpticRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Optic $optic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Optic $optic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOpticRequest $request, Optic $optic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Optic $optic)
    {
        //
    }
}
