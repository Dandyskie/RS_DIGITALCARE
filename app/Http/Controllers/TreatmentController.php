<?php

namespace App\Http\Controllers;

use App\Models\Treatment;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
   
public function index()
{
    $treatments = Treatment::all();
    return view('treatments.index', compact('treatments'));
}

public function create()
{
    return view('treatments.create');
}

public function store(Request $request)
{
    $request->validate([
        'nama' => 'required',
        'harga' => 'required|numeric',
    ]);

    Treatment::create($request->all());
    return redirect()->route('treatments.index')->with('success', 'Tindakan berhasil ditambahkan.');
}

public function edit($id)
{
    $treatment = Treatment::findOrFail($id);
    return view('treatments.edit', compact('treatment'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'harga' => 'required|numeric',
    ]);

    $treatment = Treatment::findOrFail($id);
    $treatment->update($request->all());

    return redirect()->route('treatments.index')->with('success', 'Tindakan berhasil diperbarui.');
}

public function destroy($id)
{
    Treatment::destroy($id);
    return redirect()->route('treatments.index')->with('success', 'Tindakan berhasil dihapus.');
}
}
