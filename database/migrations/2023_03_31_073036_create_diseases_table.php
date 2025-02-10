<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nama_jurusan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('img', 50);
            $table->string('nama_jurusan_code', 10);
            $table->string('nama_jurusan', 50);
            $table->string('type', 30);
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nama_jurusan');
    }
};
