<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Optic;

class OpticApi extends Controller
{
    public function index()
    {
        $optics = Optic::all();
        return response()->json($optics);
    }

    public function show($id)
    {
        $optic = Optic::findOrFail($id);
        return response()->json($optic);
    }

    public function store(Request $request)
    {
        $optic = Optic::create([
            'arus_pemayar' => $request->input('arus_pemayar'),
            'arus_pemfokus' => $request->input('arus_pemfokus'),
            'tegangan_pemayar' => $request->input('tegangan_pemayar'),
            'tegangan_pemfokus' => $request->input('tegangan_pemfokus'),
        ]);
        return response()->json($optic, 201);
    }

    public function update(Request $request, $id)
    {
        $optic = Optic::findOrFail($id);
        $optic->update([
            'arus_pemayar' => $request->input('arus_pemayar'),
            'arus_pemfokus' => $request->input('arus_pemfokus'),
            'tegangan_pemayar' => $request->input('tegangan_pemayar'),
            'tegangan_pemfokus' => $request->input('tegangan_pemfokus'),
        ]);
        return response()->json($optic);
    }

    public function destroy($id)
    {
        $optic = Optic::findOrFail($id);
        $optic->delete();
        return response()->json(null, 204);
    }

    public function getOpticData()
    {
        $data = Optic::pluck('arus_pemayar', 'arus_pemfokus', 'tegangan_pemayar', 'tegangan_pemfokus')->toArray();

        return response()->json(['data' => $data]);
    }
}
