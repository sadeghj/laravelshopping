<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRolesUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles_user', function(Blueprint $table)
		{
			$table->bigInteger('user_id')->unsigned()->nullable()->index('fk_roles_users_users');
			$table->bigInteger('roles_id')->unsigned()->nullable()->index('fk_roles_users_roles');
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
		Schema::drop('roles_user');
	}

}
