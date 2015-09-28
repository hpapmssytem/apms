<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use apms\Position;

class PositionTableSeeder extends seeder
{
	public function run()
	{
		$faker = \Faker\Factory::create();

		foreach(range(1, 8) as $index)
		{
			Position::create([
				'name' 			=> $faker->text(10),
				'description'	=> $faker->paragraph(4),
				'status' => 1
			]);
		}
	}
}