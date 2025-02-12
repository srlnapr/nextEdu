<?php

namespace Database\Seeders;

use App\Models\SaranPekerjaan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SaranPekerjaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SaranPekerjaan::create([
            'nama_jurusan_id' => 1,
            'saran_pekerjaan' => 'Learn ways to lower your stress. Try deep breathing, gardening, taking a walk, meditating, working on your hobby, or listening to your favorite music.',
        ]);
        SaranPekerjaan::create([
            'nama_jurusan_id' => 2,
            'saran_pekerjaan' => 'Choose foods that are lower in calories, saturated fat, trans fat, sugar, and salt.',
        ]);
        SaranPekerjaan::create([
            'nama_jurusan_id' => 3,
            'saran_pekerjaan' => 'Eat foods with more fiber, such as whole grain cereals, breads, crackers, rice, or pasta.',
        ]);
        SaranPekerjaan::create([
            'nama_jurusan_id' => 4,
            'saran_pekerjaan' => 'Learn ways to lower your stress. Try deep breathing, gardening, taking a walk, meditating, working on your hobby, or listening to your favorite music.',
        ]);
        SaranPekerjaan::create([
            'nama_jurusan_id' => 5,
            'saran_pekerjaan' => 'Choose foods that are lower in calories, saturated fat, trans fat, sugar, and salt.',
        ]);
        SaranPekerjaan::create([
            'nama_jurusan_id' => 6,
            'saran_pekerjaan' => 'Drink water instead of juice and regular soda.',
        ]);
        SaranPekerjaan::create([
            'nama_jurusan_id' => 7,
            'saran_pekerjaan' => 'Work out at least 150 minutes of exercise each week, divided into 5 sessions or days, 30 minutes per session. Use stretch bands, do yoga, heavy gardening (digging and planting with tools), or try push-ups.',
        ]);

    }
}