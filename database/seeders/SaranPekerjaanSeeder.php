<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SaranPekerjaan;

class SaranPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaranPekerjaan::create([
            'nama_jurusan_id' => 1, // Sesuai ID di tabel jurusan
            'saran_pekerjaan' => 'Network Engineer, IT Support, Administrator Server.',
        ]);

        SaranPekerjaan::create([
            'nama_jurusan_id' => 2,
            'saran_pekerjaan' => 'Software Developer, Web Developer, Mobile App Developer.',
        ]);

        SaranPekerjaan::create([
            'nama_jurusan_id' => 3,
            'saran_pekerjaan' => 'Fiber Optic Technician, Telecom Engineer, Network Installer.',
        ]);

        SaranPekerjaan::create([
            'nama_jurusan_id' => 4,
            'saran_pekerjaan' => 'Chef, Food Stylist, Baker, Catering Entrepreneur.',
        ]);

        SaranPekerjaan::create([
            'nama_jurusan_id' => 5,
            'saran_pekerjaan' => 'Graphic Designer, UI/UX Designer, Illustrator, Animator.',
        ]);
    }
}
