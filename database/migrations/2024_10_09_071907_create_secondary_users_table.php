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
        Schema::create('secondary_users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('employeId')->nullable();
            $table->string('designation')->nullable();
            $table->string('signature')->nullable();
            $table->string('password')->nullable();
            $table->string('photo')->nullable();
            $table->string('country')->nullable();
            $table->string('districts')->nullable();
            $table->string('upozila')->nullable();
            $table->string('post')->nullable();
            $table->bigInteger('zipCode')->nullable();
            $table->string('state')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secondary_users');
    }
};
