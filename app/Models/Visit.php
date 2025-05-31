<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id', 
        'dokter_id',
         'tanggal',
          'keluhan',
        ];

        public function patient()
        {
            return $this->belongsTo(Patient::class, 'pasien_id');
        }
        
        public function doctor()
        {
            return $this->belongsTo(Doctor::class, 'dokter_id');
        }
        
    public function treatments()
    {
        return $this->belongsToMany(Treatment::class, 'visit_treatments')
                    ->withPivot('keterangan', 'subtotal')
                    ->withTimestamps();
    }
}
