<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Vakum extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vakums', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->double('tekanan_vakum_penning_mbar');
            $table->double('tekanan_vakum_pirani_mbar');
            $table->double('waktu_operasi_detik')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_vakum');
    }
};
