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
        Schema::create('projectfiles', function (Blueprint $table) {
            $table->id();
            $table->string('projectName')->nullable();
            $table->string('projectType')->nullabl();
            $table->string('doHoPr')->nullable();
            $table->string('frontLang')->nullable();
            $table->string('backLang')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName')->nullable();
            $table->bigInteger('customerId')->nullable();
            $table->string('companyName')->nullable();
            $table->string('projectDes')->nullable();
            $table->bigInteger('badget')->nullable();
            $table->bigInteger('advance')->nullable();
            $table->bigInteger('duration')->nullable();
            $table->date('endDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectfiles');
    }
};
