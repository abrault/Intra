<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class UpdateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table) {
			$table->dropUnique('users_email_unique');
			if (Schema::hasColumn('users', 'email'))
				$table->dropColumn('email');
		});

		Schema::table('users', function(Blueprint $table) {
			$table->string('login')->unique();
			$table->text('picture');
			$table->date('birthdate');
			$table->string('mobile_phone');
			$table->string('email')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table) {
			if (Schema::hasColumn('users', 'login'))
				$table->dropColumn('login');
			if (Schema::hasColumn('users', 'picture'))
				$table->dropColumn('picture');
			if (Schema::hasColumn('users', 'birthdate'))
				$table->dropColumn('birthdate');
			if (Schema::hasColumn('users', 'mobile_phone'))
				$table->dropColumn('mobile_phone');
			if (Schema::hasColumn('users', 'email'))
				$table->dropColumn('email');
		});
	}

}
