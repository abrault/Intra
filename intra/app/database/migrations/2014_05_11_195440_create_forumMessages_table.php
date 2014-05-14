<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForumMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forumMessages', function($table)
		{
			$table->increments('id');
			$table->text('content');
			$table->integer('user_id');
			$table->integer('rate')->default(0);
			$table->integer('forumThread_id');
			$table->integer('forumMessage_id')->nullable();
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
		Schema::drop('forumMessages');
	}

}
