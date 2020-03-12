<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductFaktorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_faktors', function(Blueprint $table)
		{
			$table->integer('idfakrots');
			$table->bigInteger('idproducts')->unsigned()->index('fk_product_faktors_products_0');
			$table->primary(['idfakrots','idproducts']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('product_faktors');
	}

}
