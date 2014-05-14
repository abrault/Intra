<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateGroupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('groups', function ($table)
		{
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		if (Schema::hasTable('groups'))
		{
			Schema::table('groups', function($table)
			{
				if (Schema::hasColumn('groups', 'deleted_at'))
				    $table->dropColumn('deleted_at');
			});
		}
	}
}
