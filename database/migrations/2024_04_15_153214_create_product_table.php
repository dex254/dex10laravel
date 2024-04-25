<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('description')->nullable();
            $table->date('date')->nullable();
            $table->string('colors')->nullable();
            $table->string('amount')->nullable();
            $table->string('purpose')->nullable();
            $table->string('use')->nullable();
            $table->string('frameworks')->nullable();
            $table->string('database')->nullable();
            $table->string('reviews')->nullable();
            $table->string('models')->nullable();
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
        Schema::dropIfExists('product');
    }
}
