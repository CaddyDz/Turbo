<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Brand;
use App\Model;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BrandTest extends TestCase
{
	use DatabaseMigrations, RefreshDatabase;

	/**
	 * A basic feature test example.
	 *
	 * @return void
	 */
	public function testExample()
	{
		$brand = create(Brand::class);
		$brand->models()->createMany(
			create(Model::class, [], 'make', 2)->toArray()
		);
		$this->assertInstanceOf(Collection::class, $brand->models);
		$response = $this->get(route('brand', $brand));
		$response->assertSee($brand->name);
		$response->assertStatus(200);
	}
}
