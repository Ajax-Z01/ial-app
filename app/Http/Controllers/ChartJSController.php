<?php

namespace App\Http\Controllers;

use App\Models\Optic;
use App\Models\Vakum;
use App\Models\Filamen;
use App\Models\ChartJSModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Dummy;

class ChartJSController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filamens = Filamen::select('arus_filamen', DB::raw('TIME(created_at) as time'))
            ->groupBy('arus_filamen', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_filamen = $filamens->pluck('time');
        $filamen = $filamens->pluck('arus_filamen');

        $potensios = Filamen::select('tegangan_potensio', DB::raw('TIME(created_at) as time'))
            ->groupBy('tegangan_potensio', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_filamen = $potensios->pluck('time');
        $potensio = $potensios->pluck('tegangan_potensio');

        return view('dashboard', compact('labels_filamen', 'filamen', 'potensio'));
    }
    /**
     * Display a listing of the resource.
     */
    public function all_chart()
    {
        $filamens = Filamen::select('arus_filamen', DB::raw('TIME(created_at) as time'))
            ->groupBy('arus_filamen', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_filamen = $filamens->pluck('time');
        $filamen = $filamens->pluck('arus_filamen');

        $potensios = Filamen::select('tegangan_potensio', DB::raw('TIME(created_at) as time'))
            ->groupBy('tegangan_potensio', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_filamen = $potensios->pluck('time');
        $potensio = $potensios->pluck('tegangan_potensio');

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

        $data_dummy = Dummy::select('data_dummy', DB::raw('TIME(created_at) as time'))
            ->groupBy('data_dummy', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_dummy = $data_dummy->pluck('time');
        $dummy = $data_dummy->pluck('data_dummy');

        return view('chart', compact('labels_filamen', 'filamen', 'potensio', 'labels_optic', 'a_pemayar', 'a_pemfokus', 't_pemayar', 't_pemfokus', 'labels_vakum', 'penning', 'pirani', 'labels_dummy', 'dummy'));
    }

    public function filamen()
    {
        $filamens = Filamen::select('arus_filamen', DB::raw('TIME(created_at) as time'))
            ->groupBy('arus_filamen', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_filamen = $filamens->pluck('time');
        $filamen = $filamens->pluck('arus_filamen');

        $potensios = Filamen::select('tegangan_potensio', DB::raw('TIME(created_at) as time'))
            ->groupBy('tegangan_potensio', DB::raw('TIME(created_at)'))
            ->orderBy('id', 'ASC')
            ->get();

        $labels_filamen = $potensios->pluck('time');
        $potensio = $potensios->pluck('tegangan_potensio');

        return view('chart', compact('labels_filamen', 'filamen', 'potensio'));
    }

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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ChartJSModel $chartJSModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChartJSModel $chartJSModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChartJSModel $chartJSModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChartJSModel $chartJSModel)
    {
        //
    }
}
