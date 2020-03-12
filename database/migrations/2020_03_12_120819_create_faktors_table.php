<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaktorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('faktors', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('amount');
			$table->integer('userid');
			$table->integer('status')->nullable();
			$table->integer('confirm')->nullable()->default(0);
			$table->integer('idfakrots')->nullable()->unique('unq_faktors_idfakrots');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('faktors');
	}

}
