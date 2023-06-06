<?php

namespace App\Http\Controllers;

use App\Models\Filamen;
use Illuminate\Http\Request;
use App\Exports\FilamenExport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\StoreFilamenRequest;
use App\Http\Requests\UpdateFilamenRequest;

class FilamenController extends Controller
{
    public function store(Request $request)
    {
        $filamen = new Filamen();
        $filamen->arus_filamen = $request->arus_filamen;
        $filamen->tegangan_potensio = $request->tegangan_potensio;
        $filamen->save();

        return response()->json(['message' => 'Data saved successfully']);
    }

    public function export()
    {
        return Excel::download(new FilamenExport, 'data_filamen.xlsx');
    }
}
