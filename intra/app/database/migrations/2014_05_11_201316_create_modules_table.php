<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modules', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->integer('max_places')->default(-1); // no limit

			$table->datetime('start_register');
			$table->datetime('end_register');

			$table->datetime('start_module');
			$table->datetime('end_module');

			$table->integer('credits_value')->default(0);
			$table->softDeletes();
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
		Schema::drop('modules');
	}

}
