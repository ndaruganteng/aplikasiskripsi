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
        Schema::create('tour', function (Blueprint $table) {
            $table->id();
            $table->string ('image')->default("");
            $table->string('namabiro');
            $table->string('namatour');
            $table->string('kategori');
            $table->string('highlight');
            $table->string('kuota');
            $table->string('tanggalberangkat');
            $table->string('tanggalberakhir');
            $table->string('harga');
            $table->string('deskripsi',9000);
            $table->string('fasilitas');
            $table->string('lokasi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour');
    }
};
