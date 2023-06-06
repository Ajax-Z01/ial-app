<?php

namespace App\Http\Controllers;

use App\Models\Vakum;
use App\Exports\VakumExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreVakumRequest;
use App\Http\Requests\UpdateVakumRequest;

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

    public function export()
    {
        return Excel::download(new VakumExport, 'data_vakum.xlsx');
    }
}
