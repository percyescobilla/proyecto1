<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRegistrolpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrolps', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

             $table->date('fechain')->nullable();
           

            $table->integer('ojurisdic')->unsigned()->nullable();
            $table->foreign('ojurisdic')->references('id')->on('ojurisdiccionals')->nullable();

            $table->integer('sede')->unsigned()->nullable();
             $table->foreign('sede')->references('id')->on('sedes');
            
            $table->string('nroexpe')->nullable();

            $table->integer('texpe')->unsigned()->nullable();
            $table->foreign('texpe')->references('id')->on('texpedientes');

            $table->integer('ojudicial')->unsigned()->nullable();
            $table->foreign('ojudicial')->references('id')->on('ojudicials');

            $table->integer('ejcausa')->unsigned()->nullable();
            $table->foreign('ejcausa')->references('id')->on('ecausas');

            $table->date('fechareq')->nullable();
            $table->date('fechateq')->nullable();

            $table->integer('ajudicial')->unsigned()->nullable();
            $table->foreign('ajudicial')->references('id')->on('asistentejudicials');

            $table->date('fechagc')->nullable();
            $table->date('fechacd')->nullable();
             $table->date('fechareaudiencia')->nullable();
            $table->date('fechaaudi')->nullable();

            $table->integer('ejaudiencia')->unsigned()->nullable();
            $table->foreign('ejaudiencia')->references('id')->on('eaudiencias');

            $table->integer('taudiencia')->unsigned()->nullable();
            $table->foreign('taudiencia')->references('id')->on('taudiencias');


            $table->integer('raudiencia')->unsigned()->nullable();
            $table->foreign('raudiencia')->references('id')->on('raudiencias');

            $table->date('reproaudien')->nullable();
             $table->date('fechadevol')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('registrolps');
    }
}
