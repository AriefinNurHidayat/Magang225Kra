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
        Schema::create('ruangsic', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->time('waktustart');
            $table->time('waktuend');
            $table->string('kegiatan');
            $table->string('sector');
            $table->string('petugas');
            $table->string('tempat');
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ruangsic');
    }
};
