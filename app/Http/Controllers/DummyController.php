<?php

namespace App\Http\Controllers;

use App\Events\DataDummy;
use App\Models\Dummy;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DummyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dummy = new Dummy();
        $dummy->data_dummy = $request->data_dummy;
        $dummy->save();

        return response()->json(['message' => 'Data saved successfully']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
