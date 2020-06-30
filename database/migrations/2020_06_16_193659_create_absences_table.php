<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->boolean('justifie')->default('0');
            $table->string('commentaire')->nullable();
        
           $table->unsignedBigInteger('seance_id')->index();
            $table->unsignedBigInteger('etudiant_id')->index();
            $table->timestamps();
            
            $table->foreign('seance_id')->references('id')->on('seances')->onDelete('cascade');
            $table->foreign('etudiant_id')->references('id')->on('etudiants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
