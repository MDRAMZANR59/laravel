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
        Schema::table('projectfiles', function (Blueprint $table) {
            $table->string('massage')->nullable();
            $table->string('rating')->nullable();
            $table->string('cancelReason')->nullable();
            $table->string('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projectfiles', function (Blueprint $table) {
            $table->dropColumn(['massage','rating','cacancelReasonncel','status']);
        });
    }
};
