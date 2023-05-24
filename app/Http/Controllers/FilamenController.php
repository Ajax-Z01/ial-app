<?php

namespace App\Http\Controllers;

use App\Models\Filamen;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFilamenRequest;
use App\Http\Requests\UpdateFilamenRequest;
use Illuminate\Http\Request;

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
}
