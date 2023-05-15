<?php

namespace App\Http\Controllers;

use App\Models\Filamen;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFilamenRequest;
use App\Http\Requests\UpdateFilamenRequest;

class FilamenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filamens = Filamen::select(DB::raw("arus_filamen as arus_filamen"), DB::raw("tegangan_potensio as tegangan_potensio"), DB::raw("register as register"), DB::raw("waktu_operasi_detik as waktu_operasi_detik"), DB::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("month_name"))
            ->orderBy('id', 'ASC')
            ->pluck('count', 'month_name');

        $labels = $filamens->keys();
        $data = $filamens->values();

        return view('chart', compact('labels', 'data'));
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
    public function store(StoreFilamenRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Filamen $filamen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filamen $filamen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFilamenRequest $request, Filamen $filamen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filamen $filamen)
    {
        //
    }
}
