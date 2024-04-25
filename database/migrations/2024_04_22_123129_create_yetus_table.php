<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYetusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yetus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_name')->nullable();
            $table->string('sender_id')->nullable();
            $table->string('sender_email')->nullable();
            $table->string('description')->nullable();
            $table->string('nameing')->nullable();
            $table->string('links')->nullable();
            $table->string('purpose')->nullable();
            $table->string('explain')->nullable();
            $table->date('due_date')->nullable();
            $table->string('users')->nullable();
            $table->string('amount')->nullable();
            $table->string('comun')->nullable();
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
        Schema::dropIfExists('yetus');
    }
}
