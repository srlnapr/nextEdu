<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jurusan;

class JurusanSeeder extends Seeder
{
    public function run(): void
    {
        Jurusan::create(['nama_jurusan' => 'Teknik Komputer Jaringan']);
        Jurusan::create(['nama_jurusan' => 'Rekayasa Perangkat Lunak']);
        Jurusan::create(['nama_jurusan' => 'Teknik Jaringan Akses']);
        Jurusan::create(['nama_jurusan' => 'Kuliner']);
        Jurusan::create(['nama_jurusan' => 'Desain Komunikasi Visual']);
    }
}
