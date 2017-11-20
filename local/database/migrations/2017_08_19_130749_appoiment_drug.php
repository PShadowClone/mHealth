<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AppoimentDrug extends Migration
{   
     /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        //
        Schema::create('appoiment_drug', function (Blueprint $table) {
            $table->integer('appoiment_id');
            $table->integer('drug_id');
            $table->text('dose');
            $table->text('route');
            $table->text('frequency');
            $table->primary(['appoiment_id', 'drug_id']);
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
        Schema::dropIfExists('appoiment_drug');
    }
}
