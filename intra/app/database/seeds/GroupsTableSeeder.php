<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class GroupsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Sentry::createGroup([
				'name' => $faker->unique()->word,
				'permissions' => [
					'user' => $faker->randomNumber(0, 1)
				]
			]);
		}

		foreach(range(1, 400) as $index)
		{
			Sentry::createGroup([
				'name' => $faker->unique()->name,
				'permissions' => [
					'user' => $faker->randomNumber(0, 1)
				]
			]);
		}
	}

}