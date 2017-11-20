<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientQustion extends Migration
{
     /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        //
        Schema::create('patient_qistion', function (Blueprint $table) {
            $table->integer('patient_id');
            $table->integer('qistion_id');
            $table->text('answer');
            $table->primary(['patient_id', 'qistion_id']);
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
        //
        Schema::dropIfExists('patient_qistion');
    }
}
