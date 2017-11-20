<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatientEscorts extends Migration
{
     /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        //
        Schema::create('patient_escorts', function (Blueprint $table) {
            $table->integer('patient_id');
            $table->integer('escprts_id');
            $table->primary(['patient_id', 'escprts_id']);
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
        Schema::dropIfExists('patient_escprts');
    }
}
