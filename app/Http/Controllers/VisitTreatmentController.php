<?php

namespace App\Http\Controllers;

use App\Models\VisitTreatment;
use Illuminate\Http\Request;

class VisitTreatmentController extends Controller
{
    public function destroy($id)
    {
        VisitTreatment::destroy($id);
        return response()->json(['message' => 'Tindakan berhasil dihapus dari kunjungan']);
    }
}
