<?php

namespace App\Http\Controllers;

use App\Models\Vakum;
use App\Http\Requests\StoreVakumRequest;
use App\Http\Requests\UpdateVakumRequest;

class VakumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vakum = new Vakum();
        $vakum = $vakum->get();
        return view('vakum', compact('vakum'));
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
    public function store(StoreVakumRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Vakum $vakum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vakum $vakum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVakumRequest $request, Vakum $vakum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vakum $vakum)
    {
        //
    }
}
