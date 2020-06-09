<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecettesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recettes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('photo');
            $table->text('ingredient1');
            $table->text('ingredient2');
            $table->text('ingredient3');
            $table->text('ingredient4');
            $table->text('ingredient5');
            $table->text('ingredient6');
            $table->text('preparation1');
            $table->text('preparation2');
            $table->text('preparation3');
            $table->text('preparation4');
            $table->text('preparation5');
            $table->string('type');
            $table->integer('favorie_id');
            $table->integer('cuisson');
            $table->integer('nbpersonne');
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
        Schema::dropIfExists('recettes');
    }
}
