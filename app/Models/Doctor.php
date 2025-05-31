<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'spesialis',
        'jadwal_praktek',
        'no_str',
    ];

    public function kunjungan()
    {
        return $this->hasMany(Visit::class);
    }
}
