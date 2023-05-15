<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Filamen extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('filamens', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tanggal')->nullable();
            $table->timestamps();
            $table->double('arus_filamen');
            $table->double('tegangan_potensio');
            $table->integer('register');
            $table->string('operator');
            $table->double('waktu_operasi_detik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_filamen');
    }
};
