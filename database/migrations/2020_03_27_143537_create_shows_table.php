<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug')->length(60);
            $table->string('title')->length(255);
            $table->string('poster_url')->length(255);
            $table->tinyInteger('bookable');
            $table->decimal('price');
            $table->unsignedBigInteger('locations_id');
            $table->foreign('locations_id')
                ->references('id')
                ->on('locations')
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
        Schema::dropIfExists('shows');
    }
}
