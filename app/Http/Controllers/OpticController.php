<?php

namespace App\Http\Controllers;

use App\Models\Optic;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreOpticRequest;
use App\Http\Requests\UpdateOpticRequest;
use Illuminate\Http\Request;

class OpticController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $optic = new Optic();
        $optic->arus_pemayar = $request->arus_pemayar;
        $optic->arus_pemfokus = $request->arus_pemfokus;
        $optic->tegangan_pemayar = $request->tegangan_pemayar;
        $optic->tegangan_pemfokus = $request->tegangan_pemfokus;
        $optic->save();

        return response()->json(['message' => 'Data saved successfully']);
    }
}
