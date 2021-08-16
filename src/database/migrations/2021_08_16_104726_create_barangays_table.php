<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ph_barangays', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('old_names')->nullable();
            $table->unsignedBigInteger('municipality_id')->unsigned();

            $table->foreign('municipality_id')->references('id')->on('ph_municipalities');

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
        Schema::dropIfExists('ph_barangays');
    }
}
