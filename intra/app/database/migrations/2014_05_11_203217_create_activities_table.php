<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function($table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('description');
			$table->integer('max_places')->default(-1); // no limit

			$table->datetime('start_register');
			$table->datetime('end_register');

			$table->datetime('start_activity');
			$table->datetime('end_activity');

			$table->integer('peers_number')->default(0);
			$table->integer('correctors_number')->default(0);

			$table->enum('type', ['project', 'exam', 'tutorial'])->default('project');
			$table->integer('bareme_id')->nullable();
			$table->integer('module_id');
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
		Schema::drop('activities');
	}

}
