<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Visit;
use Carbon\Carbon;

class VisitSeeder extends Seeder
{
    public function run()
    {
        Visit::insert([
            [
                'pasien_id' => 1,
                'dokter_id' => 1,
                'tanggal' => '2025-05-29',
                'keluhan' => 'Demam dan sakit kepala',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'pasien_id' => 2,
                'dokter_id' => 2,
                'tanggal' => '2025-05-30',
                'keluhan' => 'Batuk berkepanjangan',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
