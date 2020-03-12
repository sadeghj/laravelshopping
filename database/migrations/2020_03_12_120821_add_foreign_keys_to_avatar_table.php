<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAvatarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('avatar', function(Blueprint $table)
		{
			$table->foreign('avatar_id', 'fk_avatar_avatar_pivot')->references('avatar_id')->on('avatar_pivot')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('avatar', function(Blueprint $table)
		{
			$table->dropForeign('fk_avatar_avatar_pivot');
		});
	}

}
