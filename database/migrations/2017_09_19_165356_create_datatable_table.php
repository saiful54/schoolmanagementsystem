<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatatableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datatable', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender');
            $table->string('education');
            $table->string('edu');
            $table->string('class');
            $table->string('image');
            $table->string('size');
            $table->string('age');
            $table->string('month');
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
        Schema::dropIfExists('datatable');
    }
}
