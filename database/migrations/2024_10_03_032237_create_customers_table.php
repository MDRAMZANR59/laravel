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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('fristName')->nullable();
            $table->string('lastName')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('projectName')->nullable();
            $table->string('projectType')->nullable();
            $table->string('companyName')->nullable();
            $table->bigInteger('employeId')->nullable();
            $table->string('photo')->nullable();
            $table->string('country')->nullable();
            $table->string('districts')->nullable();
            $table->string('upozila')->nullable();
            $table->string('post')->nullable();
            $table->bigInteger('zipCode')->nullable();
            $table->string('state')->nullable();
            $table->bigInteger('houseNumber')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
