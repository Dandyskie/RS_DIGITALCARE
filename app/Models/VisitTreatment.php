<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitTreatment extends Model
{
    use HasFactory;

    protected $table = 'visit_treatments';

    protected $fillable = [
        'visit_id', 
        'treatment_id', 
        'keterangan', 
        'subtotal',
    ];
}
