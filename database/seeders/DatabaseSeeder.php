<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            PertanyaanSeeder::class,
            JurusanSeeder::class,
            SaranPekerjaanSeeder::class,
            ArtikelSeeder::class,
            RuleSeeder::class,
            HasilTesSeeder::class,
        ]);
    }
}
