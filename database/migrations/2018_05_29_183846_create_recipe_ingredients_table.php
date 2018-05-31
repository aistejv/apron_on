<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeIngredientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_ingredients', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipe_id')->unsigned();
            $table->integer('ingredient_id')->unsigned();
            $table->float('amount', 6, 2);
            $table->string('measurement');
            $table->timestamps();

            $table->foreign('recipe_id')->references('id')->on('recipes')->onDelete('cascade')->onupdate('cascade');
            $table->foreign('ingredient_id')->references('id')->on('ingredients')->onDelete('cascade')->onupdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipe_ingredients');
    }
}
