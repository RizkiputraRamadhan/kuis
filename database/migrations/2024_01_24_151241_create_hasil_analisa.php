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
        Schema::create('hasil_analisa', function (Blueprint $table) {
            $table->id();
            $table->float('nilai_tangible');
            $table->float('nilai_reliability');
            $table->float('nilai_responsiveness');
            $table->float('nilai_assurance');
            $table->float('nilai_emphaty');
            $table->float('nilai_Fuzzy');
            $table->unsignedBigInteger('namaKonsumen'); 
            $table->timestamps();
            $table->foreign('namaKonsumen')->references('id')->on('konsumen');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_analisa');
    }
};
