<?php

declare(strict_types=1);

use App\User;
use App\Profile;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(): void
	{
		$admin = User::create([
			'name' => config('site.admin.name'),
			'email' => config('site.admin.email'),
			'email_verified_at' => now(),
			'password' => bcrypt('password'),
		]);
		$admin->assignRole('Super Admin');
		factory(User::class, 5)->create()->each(function ($user) {
			$user->givePermissionTo('Access Stock');
			factory(Profile::class)->create(['user_id' => $user->id]);
		});
	}
}
