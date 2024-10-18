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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->date('joiningDate')->nullable();
            $table->bigInteger('employeId')->nullable();
            $table->string('designation')->nullabel();
            $table->string('expart')->nullabel();
            $table->string('department')->nullabel();
            $table->string('signature')->nullabel();
            $table->string('password')->nullabel();
            $table->string('photo')->nullabel();
            $table->string('country')->nullabel();
            $table->string('districts')->nullabel();
            $table->string('upozila')->nullabel();
            $table->string('post')->nullabel();
            $table->bigInteger('zipCode')->nullabel();
            $table->string('state')->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
