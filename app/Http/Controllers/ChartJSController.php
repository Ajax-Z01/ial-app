<?php

namespace App\Http\Controllers;

use App\Models\Filamen;
use App\Models\ChartJSModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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

        $labels = $filamens->pluck('time');
        $data = $filamens->pluck('arus_filamen');

        return view('chart_test', compact('labels', 'data'));
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
