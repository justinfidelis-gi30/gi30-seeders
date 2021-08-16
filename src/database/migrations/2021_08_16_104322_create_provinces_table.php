<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_provinces', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('old_names')->nullable();
            $table->enum('geographic_Level',['PROVINCE','DISTRICT','INDEPENDENT']);
            $table->unsignedBigInteger('region_id')->unsigned();

            $table->foreign('region_id')->references('id')->on('ph_regions');

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
        Schema::dropIfExists('ph_provinces');
    }
}
