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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pertanyaanID');
            $table->String('namaKonsumen');
            $table->string('jawabanPersepsi');
            $table->string('jawabanHarapan');
            $table->timestamps();
            $table->foreign('pertanyaanID')->references('id')->on('pertanyaan');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
