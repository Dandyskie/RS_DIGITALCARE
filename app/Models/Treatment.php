<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tindakan',
         'biaya', 
         'kode_icd',
        ];

    public function visits()
    {
        return $this->belongsToMany(Visit::class, 'visit_treatments')
                    ->withPivot('keterangan', 'subtotal')
                    ->withTimestamps();
    }
}
