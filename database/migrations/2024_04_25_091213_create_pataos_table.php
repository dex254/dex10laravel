<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pataos', function (Blueprint $table) {
            $table->id();
            $table->string('document_name')->nullable();
            $table->string('sender_id')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('nameing')->nullable();
            $table->text('description')->nullable();
            $table->text('explain')->nullable();
            $table->date('due_date')->nullable();
            $table->string('users')->nullable();
            $table->string('amount')->nullable();
            $table->string('comun')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pataos');
    }
};
