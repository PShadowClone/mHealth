<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppoimentRadiology extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         //
         Schema::create('appoiment_radiology', function (Blueprint $table) {
             $table->integer('appoiment_id');
             $table->integer('radiology_id');
             $table->primary(['appoiment_id', 'radiology_id']);
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
         Schema::dropIfExists('appoiment_radiology');
     }
}
