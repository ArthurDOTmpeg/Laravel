<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTypesShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists_types_shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            //artists_types key
            $table->unsignedBigInteger('artists_types_id');
            $table->foreign('artists_types_id')
                ->references('id')
                ->on('artists_types')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
            //shows key
            $table->unsignedBigInteger('shows_id');
            $table->foreign('shows_id')
                ->references('id')
                ->on('shows')
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
        Schema::dropIfExists('artists_types_shows');
    }
}
