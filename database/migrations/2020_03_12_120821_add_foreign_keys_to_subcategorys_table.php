<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToSubcategorysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subcategorys', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_subcategory_category')->references('id')->on('categorys')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subcategorys', function(Blueprint $table)
		{
			$table->dropForeign('fk_subcategory_category');
		});
	}

}
