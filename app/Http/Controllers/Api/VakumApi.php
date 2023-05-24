<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Vakum;

class VakumApi extends Controller
{
    public function index()
    {
        $vakums = Vakum::all();
        return response()->json($vakums);
    }

    public function show($id)
    {
        $vakum = Vakum::findOrFail($id);
        return response()->json($vakum);
    }

    public function store(Request $request)
    {
        $vakum = Vakum::create([
            'tekanan_vakum_penning_mbar' => $request->input('tekanan_vakum_penning_mbar'),
            'tekanan_vakum_pirani_mbar' => $request->input('tekanan_vakum_pirani_mbar'),
        ]);
        return response()->json($vakum, 201);
    }

    public function update(Request $request, $id)
    {
        $vakum = Vakum::findOrFail($id);
        $vakum->update([
            'tekanan_vakum_penning_mbar' => $request->input('tekanan_vakum_penning_mbar'),
            'tekanan_vakum_pirani_mbar' => $request->input('tekanan_vakum_pirani_mbar'),
        ]);
        return response()->json($vakum);
    }

    public function destroy($id)
    {
        $vakum = Vakum::findOrFail($id);
        $vakum->delete();
        return response()->json(null, 204);
    }

    public function getVakumData()
    {
        $data = Vakum::pluck('tekanan_vakum_penning_mbar', 'tekanan_vakum_pirani_mbar')->toArray();

        return response()->json(['data' => $data]);
    }
}
