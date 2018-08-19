<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {
			$table->engine = 'InnoDB';
			$table->increments('id_food');
			$table->string('name_food');
			$table->longText('description_food');
			$table->string('images_food');
			$table->decimal('price_food', 10, 0);
			$table->integer('category')->unsigned()->index();
			$table->foreign('category')->references('id_category')->on('category')->onDelete('cascade');
			$table->integer('category_food')->unsigned()->index();
			$table->foreign('category_food')->references('id_category_food')->on('category_food')->onDelete('cascade');
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
        Schema::dropIfExists('food');
    }
}
