<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ImagesTableSeeder');
	}

}
class NewsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Model::unguard();
		// $this->call('UserTableSeeder');
		DB::table('news')->insert([
			['name'=>'tieu de 1','user_id'=>'1'],
			['name'=>'tieu de 2','user_id'=>'1'],
			['name'=>'tieu de 3','user_id'=>'1'],
			['name'=>'tieu de 4','user_id'=>'1'],
			['name'=>'tieu de 5','user_id'=>'1'],
		]);
	}

}
class ImagesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Model::unguard();
		// $this->call('UserTableSeeder');
		DB::table('images')->insert([
			['name'=>'image1','new_id'=>'1'],
			['name'=>'image2','new_id'=>'1'],
			['name'=>'image3','new_id'=>'1'],
			['name'=>'image4','new_id'=>'1'],
			['name'=>'image5','new_id'=>'1'],
		]);
	}

}