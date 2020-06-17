<?php

use App\Type;
use App\Category;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Get the sub categories
		$categories = Category::where('category_id', '!=', null)->select('id')->pluck('id')->toArray();
		foreach ($categories as $category) {
			factory(Type::class)->create(['category_id' => $category]);
		}
	}
}
