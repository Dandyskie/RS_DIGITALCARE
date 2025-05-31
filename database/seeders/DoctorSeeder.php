<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doctor;
use Carbon\Carbon;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        Doctor::insert([
            [
                'nama' => 'dr. Andi Saputra',
                'spesialis' => 'Umum',
                'no_str' => 'STR12345678',
                'jadwal_praktek' => 'Senin - Jumat 08.00-14.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'dr. Nisa Fadilah',
                'spesialis' => 'Anak',
                'no_str' => 'STR87654321',
                'jadwal_praktek' => 'Selasa - Sabtu 09.00-15.00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
