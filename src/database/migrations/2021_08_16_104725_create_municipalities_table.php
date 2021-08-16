<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('old_names')->nullable();
            $table->enum('geographic_Level',['MUNICIPALITY','CITY','SUB MUNICIPALITY']);
            $table->unsignedBigInteger('province_id')->unsigned();

            $table->foreign('province_id')->references('id')->on('ph_provinces');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ph_municipalities');
    }
}
