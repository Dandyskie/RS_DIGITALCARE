<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PatientSeeder extends Seeder
{
    public function run()
    {
        DB::table('patients')->insert([
            [
                'nama' => 'Nazla Aisy Busainna',
                'nik' => '3302010101010001',
                'tgl_lahir' => '2005-01-15',
                'alamat' => 'Joho, Sukoharjo',
                'no_hp' => '081234567891',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Dandy Geraldo',
                'nik' => '3302010101010002',
                'tgl_lahir' => '2004-10-10',
                'alamat' => 'Solo, Jawa Tengah',
                'no_hp' => '081234567892',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Dewi Lestari',
                'nik' => '3302010101010003',
                'tgl_lahir' => '2003-05-25',
                'alamat' => 'Kartasura, Sukoharjo',
                'no_hp' => '081234567893',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
