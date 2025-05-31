<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        return response()->json(Doctor::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'spesialis' => 'required',
            'jadwal_praktek' => 'required',
            'no_str' => 'required|unique:doctors',
        ]);

        $doctor = Doctor::create($request->all());
        return response()->json($doctor, 201);
    }

    public function show($id)
    {
        return response()->json(Doctor::findOrFail($id));
    }

    public function update(Request $request, $id)
    {
        $doctor = Doctor::findOrFail($id);
        $doctor->update($request->all());
        return response()->json($doctor);
    }

    public function destroy($id)
    {
        Doctor::destroy($id);
        return response()->json(null, 204);
    }
}
