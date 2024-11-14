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
        Schema::create('create_mails', function (Blueprint $table) {
            $table->id();
            $table->integer('senderId')->nullable();
            $table->integer('receverId')->nullable();
            $table->string('status')->nullable();
            $table->string('mailType')->nullable();
            $table->string('reciver')->nullable();
            $table->string('subject')->nullable();
            $table->string('bodyMassage')->nullable();
            $table->string('attachment')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('create_mails');
    }
};
