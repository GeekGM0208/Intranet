<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAduanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aduanas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_oficina')->unsigned();
            $table->string('nombre_aduana');
            $table->string('codigo_aduana')->unique();
            $table->timestamps();

            $table->foreign('id_oficina')->references('id')->on('oficinas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aduanas');
    }
}
