<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('when');
            
            //Shows foreign key
            $table->bigInteger('shows_id');
            $table->foreign('shows_id')
                ->references('id')
                ->on('shows')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
            //Locations foreign key
            $table->bigInteger('locations_id');
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
        Schema::dropIfExists('representations');
    }
}
