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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            ;//relation
            $table->integer('projectId')->constrained();
            //
            $table->bigInteger('employeeId')->nullable();
            $table->string('note')->nullable();
            $table->string('task')->nullable();
            $table->date('assignDate')->nullable();
            $table->date('finishDate')->nullable();
            $table->date('actualDate')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
