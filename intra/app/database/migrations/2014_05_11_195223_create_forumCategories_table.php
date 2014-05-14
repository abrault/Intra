<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumCategoriesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forumCategories', function($table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('user_id');
			$table->integer('forumCategory_id')->nullable(); // forumCategories_id
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
		Schema::drop('forumCategories');
	}

}
