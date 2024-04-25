<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOmbasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ombas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sender_id')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('themes')->nullable();
            $table->string('colors')->nullable();
            $table->date('due_date')->nullable();
            $table->string('usage')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Ombas');
    }
}
