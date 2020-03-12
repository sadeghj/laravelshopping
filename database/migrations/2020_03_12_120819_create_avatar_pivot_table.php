<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAvatarPivotTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('avatar_pivot', function(Blueprint $table)
		{
			$table->binary('avatar_pivot', 10)->nullable();
			$table->bigInteger('avatarable_id')->unsigned()->nullable()->index('fk_avatar_pivot_users');
			$table->string('avatarable_type', 100)->nullable();
			$table->bigInteger('avatar_id')->unsigned()->nullable()->unique('unq_avatar_pivot_avatar_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('avatar_pivot');
	}

}
