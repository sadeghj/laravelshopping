<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->bigInteger('id')->unsigned()->primary();
			$table->string('name', 100);
			$table->string('price', 100);
			$table->integer('points')->nullable();
			$table->integer('discount');
			$table->integer('subcategory')->nullable()->index('fk_products_subcategory');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
