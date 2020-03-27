<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->length(60);
            $table->string('designation')->length(60);
            $table->string('address')->length(255);
            $table->string('website')->length(255);
            $table->string('phone')->length(60);
            $table->unsignedBigInteger('locality_id');
            $table->foreign('locality_id')
                ->references('id')
                ->on('localities')
                ->onDelete('restrict')
                ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
