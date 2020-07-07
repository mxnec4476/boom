<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAshisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ashis', function (Blueprint $table) {
            $table->id();
            $table->string('date'); 
            $table->string('name'); 
            $table->string('goods');
            $table->string('cost');
            $table->decimal('price',10,2);
            $table->string('amount');
            $table->string('all');
            $table->string('pro');
            $table->string('abode');
            $table->string('call');
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
        Schema::dropIfExists('ashis');
    }
}
