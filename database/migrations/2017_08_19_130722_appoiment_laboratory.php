<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppoimentLaboratory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('appoiment_laboratory', function (Blueprint $table) {
             $table->integer('appoiment_id');
             $table->integer('laboratory_id');
             $table->primary(['appoiment_id', 'laboratory_id']);
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
         Schema::dropIfExists('appoiment_laboratory');
     }
}
