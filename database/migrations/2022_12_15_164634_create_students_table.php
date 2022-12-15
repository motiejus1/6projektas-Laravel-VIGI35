<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id(); // primary key 99999999999999999999
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            // potencialaus isorinio rakto tipas PRIVALO buti tokio pat tipo kaip PIRMINIS raktas
            $table->unsignedBigInteger('group_id'); //int 11 - 99999999999
            
            
            //kuri stulpeli nori padaryti isoriniu raktu - foreign()
            // references - id stulpelio pavadinima su kuriuo sudaromas rysys
            //on - lentele kurioje yra id stulpelis su kuriuo sudaromas rysys


            // foreign('isorinio rakto id')
            //references('pirminio rakto id')
            //on('lenteles pavadinimas kuriame yra references pirminis raktas')
            //rysio sudarymo komanda migracijoje
            $table->foreign('group_id')->references('id')->on('groups');

            //universitetus
            //universities



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
        Schema::dropIfExists('students');
    }
}
