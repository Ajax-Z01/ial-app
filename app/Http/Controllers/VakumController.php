<?php

namespace App\Http\Controllers;

use App\Models\Vakum;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreVakumRequest;
use App\Http\Requests\UpdateVakumRequest;

class VakumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function vakum()
    {
        $pennings = Vakum::select('tekanan_vakum_penning_mbar', DB::raw('TIME(created_at) as time'))
            ->groupBy('tekanan_vakum_penning_mbar', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_vakum = $pennings->pluck('time');
        $penning = $pennings->pluck('tekanan_vakum_penning_mbar');

        $piranis = Vakum::select('tekanan_vakum_pirani_mbar', DB::raw('TIME(created_at) as time'))
            ->groupBy('tekanan_vakum_pirani_mbar', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_vakum = $piranis->pluck('time');
        $pirani = $piranis->pluck('tekanan_vakum_pirani_mbar');

        return view('chart', compact('labels_vakum', 'penning', 'pirani'));
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
