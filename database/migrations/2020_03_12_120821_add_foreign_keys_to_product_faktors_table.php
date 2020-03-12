<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToProductFaktorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('product_faktors', function(Blueprint $table)
		{
			$table->foreign('idfakrots', 'fk_product_faktors_faktors')->references('idfakrots')->on('faktors')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('idproducts', 'fk_product_faktors_products_0')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('product_faktors', function(Blueprint $table)
		{
			$table->dropForeign('fk_product_faktors_faktors');
			$table->dropForeign('fk_product_faktors_products_0');
		});
	}

}
