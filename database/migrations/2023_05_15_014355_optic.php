<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Optic extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('optics', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal')->nullable();
            $table->timestamps();
            $table->double('arus_pemayar');
            $table->double('arus_pemfokus');
            $table->double('tegangan_pemayar');
            $table->double('tegangan_pemfokus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_optik');
    }
};
