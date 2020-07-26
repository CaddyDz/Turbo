<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		// Flush the redis cache to prevent seeing old data
		\Illuminate\Support\Facades\Redis::flushall();
		$this->clearSearchIndexes();
		$this->cleanupStorage();
		$this->call(RoleSeeder::class);
		$this->call(UserSeeder::class);
		$this->call(SupplierSeeder::class);
		$this->call(ClientSeeder::class);
		$this->call(CategorySeeder::class);
		$this->call(TypeSeeder::class);
		$this->call(BrandSeeder::class);
		$this->call(VehicleSeeder::class);
		$this->call(PartSeeder::class);
		$this->call(StockSeeder::class);
		$this->call(ReviewSeeder::class);
		$this->call(OrderSeeder::class);
		$this->call(DiscountSeeder::class);
		$this->call(StoreSeeder::class);
		$this->call(StoreContactSeeder::class);
		$this->call(GarageSeeder::class);
	}

	/**
	 * Clear search indexes.
	 *
	 * Calls scout flush artisan command
	 *
	 **/
	private function clearSearchIndexes(): void
	{
		Artisan::call('scout:flush App\\\Vehicle');
		Artisan::call('scout:flush App\\\Part');
	}

	/**
	 * Cleanup storage before seeding.
	 *
	 * Delete and recreate storage directories
	 *
	 **/
	public function cleanupStorage(): void
	{
		Storage::disk('public')->deleteDirectory('parts');
		Storage::disk('public')->makeDirectory('parts');
		Storage::disk('public')->deleteDirectory('avatars');
		Storage::disk('public')->makeDirectory('avatars');
		Storage::disk('public')->deleteDirectory('categories');
		Storage::disk('public')->makeDirectory('categories');
		Storage::disk('public')->deleteDirectory('types');
		Storage::disk('public')->makeDirectory('types');
	}
}
