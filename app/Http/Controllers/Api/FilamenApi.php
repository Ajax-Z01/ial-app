<?php

namespace App\Http\Controllers\Api;

use App\Models\Filamen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FilamenApi extends Controller
{
    public function index()
    {
        $filamens = Filamen::all();
        return response()->json($filamens);
    }

    public function show($id)
    {
        $filamen = Filamen::findOrFail($id);
        return response()->json($filamen);
    }

    public function store(Request $request)
    {
        $filamen = Filamen::create([
            'arus_filamen' => $request->input('arus_filamen'),
            'tegangan_potensio' => $request->input('tegangan_potensio'),
        ]);
        return response()->json($filamen, 201);
    }

    public function update(Request $request, $id)
    {
        $filamen = Filamen::findOrFail($id);
        $filamen->update([
            'arus_filamen' => $request->input('arus_filamen'),
            'tegangan_potensio' => $request->input('tegangan_potensio'),
        ]);
        return response()->json($filamen);
    }

    public function destroy($id)
    {
        $filamen = Filamen::findOrFail($id);
        $filamen->delete();
        return response()->json(null, 204);
    }

    public function getFilamenData()
    {
        $data = Filamen::pluck('arus_filamen', 'tegangan_potensio')->toArray();

        return response()->json(['data' => $data]);
    }
}
