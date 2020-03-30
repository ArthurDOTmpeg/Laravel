<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentationsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('places');
            
            //Representations foreign key
            $table->unsignedBigInteger('representations_id');
            $table->foreign('representations_id')
                ->references('id')
                ->on('representations')
                ->onDelete('restrict')
                ->onUpdate('restrict');
            
            //Users foreign key
            $table->unsignedBigInteger('users_id');
            $table->foreign('users_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('representations_users');
    }
}
