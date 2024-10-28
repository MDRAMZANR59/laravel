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
        Schema::create('customer_notes', function (Blueprint $table) {
            $table->id();
            $table->string('customerName')->nullable();
            $table->bigInteger('customerId')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('employeeId')->nullable();
            $table->string('note')->nullable();
            $table->date('firstMeet')->nullable();
            $table->date('nextMeet')->nullable();
            $table->string('attachment')->nullable();
            $table->string('meetLocation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_notes');
    }
};
