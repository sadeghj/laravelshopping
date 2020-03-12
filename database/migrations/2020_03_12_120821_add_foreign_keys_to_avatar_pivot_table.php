<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAvatarPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('avatar_pivot', function(Blueprint $table)
		{
			$table->foreign('avatarable_id', 'fk_avatar_pivot_products')->references('id')->on('products')->onUpdate('CASCADE')->onDelete('NO ACTION');
			$table->foreign('avatarable_id', 'fk_avatar_pivot_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('avatar_pivot', function(Blueprint $table)
		{
			$table->dropForeign('fk_avatar_pivot_products');
			$table->dropForeign('fk_avatar_pivot_users');
		});
	}

}
