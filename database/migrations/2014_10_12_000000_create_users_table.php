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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('role_id')->constrained()->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('nid')->nullable();
            $table->date('dob')->nullable();
            $table->string('email')->unique()->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('password')->nullable();
            $table->date('joiningDate')->nullable();
            $table->string('designation')->nullable();
            $table->string('expart')->nullable();
            $table->string('department')->nullable();
            $table->string('signature')->nullable();
            $table->string('photo')->nullable();
            $table->string('country')->nullable();
            $table->string('districts')->nullable();
            $table->string('upozila')->nullable();
            $table->string('post')->nullable();
            $table->bigInteger('zipCode')->nullable();
            $table->string('state')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken()->nullable();
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
};
// $table->id();
//             $table->string('name');
//             $table->string('email')->unique();
//             $table->timestamp('email_verified_at')->nullable();
//             $table->string('password');
//             $table->foreignId('role_id')->constrained();
//             $table->rememberToken();
//             $table->timestamps();