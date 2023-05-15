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
