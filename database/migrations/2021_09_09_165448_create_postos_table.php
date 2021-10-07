<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postos', function (Blueprint $table) {
            $table->id();
            $table->string('cnpj');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable(); // professor acha desnecessário
            $table->string('cell');
            $table->string('tel')->nullable();
            $table->string('address');
            $table->integer('contrato_id');
            $table->integer('gerente_id');  // professor 
            // $table->integer('bomba_id'); // Professor comentou  
            // $table->integer('bico_id');
            // $table->integer('turno_id');
            // $table->string('cicloTurno');
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
        Schema::dropIfExists('postos');
    }
}
