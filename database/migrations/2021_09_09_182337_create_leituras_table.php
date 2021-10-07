<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeiturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leituras', function (Blueprint $table) {
            $table->id();
            // $table->string('name')->nullable();
            // $table->integer('bomba_id'); // professor
            $table->integer('bico_id');
            $table->integer('turno_id');
            $table->string('leitura');
            $table->date('data'); // professor
            // $table->integer('gerente_id');
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
        Schema::dropIfExists('leituras');
    }
}
