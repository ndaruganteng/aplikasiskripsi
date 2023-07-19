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
            $table->id('id_tour');
            $table->string ('image')->default("");
            $table->string('namabiro');
            $table->string('namatour');
            $table->string('kategori');
            $table->string('highlight');
            $table->string('durasi');
            $table->string('tanggalberangkat');
            $table->string('harga');
            $table->string('deskripsi',9000);
            $table->string('fasilitas');
            $table->string('lokasi');
            $table->string('status')->nullable();
            $table->timestamp('date')->nullable();
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
