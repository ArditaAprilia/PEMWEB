<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    public function run(): void
    {
        Siswa::create([
            'nama' => 'Ahmad Fajar',
            'tanggal_lahir' => '2005-08-12',
            'kelas' => 'X IPA 1',
            'nilai_rata_rata' => 85.5,
        ]);

        Siswa::create([
            'nama' => 'Putri Ayu',
            'tanggal_lahir' => '2005-11-23',
            'kelas' => 'XI IPA 2',
            'nilai_rata_rata' => 90.0,
        ]);

        Siswa::create([
            'nama' => 'Dewi Lestari',
            'tanggal_lahir' => '2004-07-15',
            'kelas' => 'XII IPS 1',
            'nilai_rata_rata' => 88.2,
        ]);
    }
}