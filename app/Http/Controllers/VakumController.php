<?php

namespace App\Http\Controllers;

use App\Models\Vakum;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreVakumRequest;
use App\Http\Requests\UpdateVakumRequest;
use Illuminate\Http\Request;

class VakumController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vakum = new Vakum();
        $vakum->tekanan_vakum_penning_mbar = $request->tekanan_vakum_penning_mbar;
        $vakum->tekanan_vakum_pirani_mbar = $request->tekanan_vakum_pirani_mbar;
        $vakum->save();

        return response()->json(['message' => 'Data saved successfully']);
    }
}
