<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VisitTreatmentSeeder extends Seeder
{
    public function run()
    {
        DB::table('visit_treatments')->insert([
            [
                'visit_id' => 1, // pastikan ID visit ini ada
                'treatment_id' => 1, // pastikan ID treatment ini ada
                'keterangan' => 'Pemeriksaan awal',
                'subtotal' => 150000.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'visit_id' => 1,
                'treatment_id' => 2,
                'keterangan' => 'Pemeriksaan lanjutan',
                'subtotal' => 200000.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'visit_id' => 2,
                'treatment_id' => 1,
                'keterangan' => 'Konsultasi ringan',
                'subtotal' => 100000.00,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
