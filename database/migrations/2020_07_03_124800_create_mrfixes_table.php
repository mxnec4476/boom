<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMrfixesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mrfixes', function (Blueprint $table) {
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
            $table->string('vehicle1');
            $table->string('vehicle2');
            $table->string('vehicle3');
            $table->string('vehicle4');
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
        Schema::dropIfExists('mrfixes');
    }
}
