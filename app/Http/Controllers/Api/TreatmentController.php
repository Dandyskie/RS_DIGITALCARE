<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    public function index()
    {
        return response()->json(Treatment::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_tindakan' => 'required',
            'biaya' => 'required|numeric',
            'kode_icd' => 'required|unique:treatments',
        ]);

        $treatment = Treatment::create($request->all());
        return response()->json($treatment, 201);
    }

    public function show($id)
    {
        return response()->json(Treatment::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $treatment = Treatment::findOrFail($id);
        $treatment->update($request->all());
        return response()->json($treatment);
    }

    public function destroy($id)
    {
        Treatment::destroy($id);
        return response()->json(null, 204);
    }
}
