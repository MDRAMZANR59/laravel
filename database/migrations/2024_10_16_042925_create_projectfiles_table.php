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
            $table->string('frontLiAndFrame')->nullable();
            $table->string('backLib')->nullable();
            $table->string('frontEndLan')->nullable();
            $table->string('backLang')->nullable();
            $table->string('database')->nullable();
            $table->string('customerNameP')->nullable();
            // $table->integer('customerId')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('estimatedBudget')->nullable();
            $table->date('reciveDate')->nullable();
            $table->bigInteger('eDuration')->nullable();
            $table->date('eEndDate')->nullable();
            $table->string('projectLeader')->nullable();
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
