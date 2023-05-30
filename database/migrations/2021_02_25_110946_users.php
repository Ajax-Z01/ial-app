<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('profile_image')->default('/img/default-profile.png');
            $table->string('mobile')->nullable();
            $table->string('location')->nullable();
            $table->string('bio')->nullable();
            $table->enum('type', ['admin', 'user'])->default('user');
            $table->enum('status', ['approved', 'notapproved'])->default('notapproved');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
