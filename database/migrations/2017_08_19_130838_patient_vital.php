<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientVital extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        //
        Schema::create('patient_vital', function (Blueprint $table) {
            $table->integer('patient_id');
            $table->integer('vital_id');
            $table->text('value');
            $table->primary(['patient_id', 'vital_id']);
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
        Schema::dropIfExists('patient_vital');
    }
}
