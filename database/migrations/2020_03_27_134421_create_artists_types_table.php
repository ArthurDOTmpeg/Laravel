<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            //artists key
            $table->unsignedBigInteger('artists_id');
            $table->foreign('artists_id')
                ->references('id')
                ->on('artists')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            
            //types key
            $table->unsignedBigInteger('types_id');
            $table->foreign('types_id')
                ->references('id')
                ->on('types')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artists_types');
    }
}
