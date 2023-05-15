<?php

namespace App\Http\Controllers;

use App\Models\Optic;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreOpticRequest;
use App\Http\Requests\UpdateOpticRequest;

class OpticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function optic()
    {
        $a_pemayars = Optic::select('arus_pemayar', DB::raw('TIME(created_at) as time'))
            ->groupBy('arus_pemayar', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_optic = $a_pemayars->pluck('time');
        $a_pemayar = $a_pemayars->pluck('arus_pemayar');

        $a_pemfokuses = Optic::select('arus_pemfokus', DB::raw('TIME(created_at) as time'))
            ->groupBy('arus_pemfokus', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_optic = $a_pemfokuses->pluck('time');
        $a_pemfokus = $a_pemfokuses->pluck('arus_pemfokus');

        $t_pemayars = Optic::select('tegangan_pemayar', DB::raw('TIME(created_at) as time'))
            ->groupBy('tegangan_pemayar', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_optic = $t_pemayars->pluck('time');
        $t_pemayar = $t_pemayars->pluck('tegangan_pemayar');

        $t_pemfokuses = Optic::select('tegangan_pemfokus', DB::raw('TIME(created_at) as time'))
            ->groupBy('tegangan_pemfokus', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_optic = $t_pemfokuses->pluck('time');
        $t_pemfokus = $t_pemfokuses->pluck('tegangan_pemfokus');

        return view('chart', compact('labels_optic', 'a_pemayar', 'a_pemfokus', 't_pemayar', 't_pemfokus'));
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
