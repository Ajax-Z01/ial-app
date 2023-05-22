<?php

namespace App\Http\Controllers\Api;

use App\Models\Dummy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DummyApi extends Controller
{
    public function index()
    {
        $dummies = Dummy::all();
        return response()->json($dummies);
    }

    public function show($id)
    {
        $dummy = Dummy::findOrFail($id);
        return response()->json($dummy);
    }

    public function store(Request $request)
    {
        $dummy = Dummy::create($request->all());
        return response()->json($dummy, 201);
    }

    public function update(Request $request, $id)
    {
        $dummy = Dummy::findOrFail($id);
        $dummy->update($request->all());
        return response()->json($dummy);
    }

    public function destroy($id)
    {
        $dummy = Dummy::findOrFail($id);
        $dummy->delete();
        return response()->json(null, 204);
    }

    public function getDummyData()
    {
        $data = Dummy::pluck('data_dummy')->toArray();

        return response()->json(['data' => $data]);
    }
}
