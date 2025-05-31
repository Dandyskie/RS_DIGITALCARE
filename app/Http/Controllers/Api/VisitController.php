<?php

namespace App\Http\Controllers;

use App\Models\Visit;
use App\Models\Treatment;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    public function index()
    {
        return response()->json(Visit::with('patient', 'doctor', 'treatments')->get());
    }

    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required|exists:patients,id',
            'dokter_id' => 'required|exists:doctors,id',
            'tanggal' => 'required|date',
            'keluhan' => 'required',
        ]);

        $visit = Visit::create($request->all());
        return response()->json($visit, 201);
    }

    public function show($id)
    {
        return response()->json(Visit::with('patient', 'doctor', 'treatments')->findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $visit = Visit::findOrFail($id);
        $visit->update($request->all());
        return response()->json($visit);
    }

    public function destroy($id)
    {
        Visit::destroy($id);
        return response()->json(null, 204);
    }

    // Custom function to add treatment to visit
    public function addTreatment(Request $request, $id)
    {
        $request->validate([
            'treatment_id' => 'required|exists:treatments,id',
            'keterangan' => 'nullable',
            'subtotal' => 'required|numeric',
        ]);

        $visit = Visit::findOrFail($id);
        $visit->treatments()->attach($request->treatment_id, [
            'keterangan' => $request->keterangan,
            'subtotal' => $request->subtotal,
        ]);

        return response()->json(['message' => 'Tindakan berhasil ditambahkan.']);
    }
}
