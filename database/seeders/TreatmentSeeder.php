<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Treatment;
use Carbon\Carbon;

class TreatmentSeeder extends Seeder
{
    public function run()
    {
        Treatment::insert([
            [
                'nama_tindakan' => 'Pemeriksaan Umum',
                'biaya' => 150000,
                'kode_icd' => 'A00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_tindakan' => 'Tes Darah Lengkap',
                'biaya' => 250000,
                'kode_icd' => 'B00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
