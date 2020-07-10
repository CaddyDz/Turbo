<?php

use App\Order;
use App\Supplier;
use App\User;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = User::select('id')->pluck('id')->toArray();
		$suppliers = Supplier::select('id')->pluck('id')->toArray();
		foreach ($users as $user) {
			foreach ($suppliers as $supplier) {
				factory(Order::class, 5)->create([
					'supplier_id' => $supplier,
					'user_id' => $user,
				]);
			}
		}
	}
}
