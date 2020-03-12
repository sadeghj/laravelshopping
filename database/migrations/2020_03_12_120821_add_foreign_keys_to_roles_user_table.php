<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToRolesUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roles_user', function(Blueprint $table)
		{
			$table->foreign('roles_id', 'fk_roles_users_roles')->references('id')->on('roles')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('user_id', 'fk_roles_users_users')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roles_user', function(Blueprint $table)
		{
			$table->dropForeign('fk_roles_users_roles');
			$table->dropForeign('fk_roles_users_users');
		});
	}

}
