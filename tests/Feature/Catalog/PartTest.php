<?php

declare(strict_types=1);

namespace Tests\Feature\Catalog;

use App\Part;
use App\Type;
use App\User;
use App\Brand;
use App\Model;
use App\Engine;
use App\Vehicle;
use App\Category;
use Tests\TestCase;
use Illuminate\Support\Facades\Storage;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PartTest extends TestCase
{
	use RefreshDatabase;

	/**
	 * Test part view and route.
	 */
	public function test_we_can_view_a_part(): void
	{
		Storage::disk('public')->makeDirectory('parts');
		$user = create(User::class);
		$brand = create(Brand::class);
		$model = create(Model::class, ['brand_id' => $brand->id]);
		$vehicle = create(Vehicle::class, ['model_id' => $model->id]);
		$engine = create(Engine::class, ['vehicle_id' => $vehicle->id]);
		$category = create(Category::class, ['engine_id' => $engine->id, 'internal_id' => 1]);
		$type = create(Type::class, ['category_id' => $category->id]);
		$part = create(Part::class, [
			'user_id' => $user->id,
			'vehicle_id' => $vehicle->id,
			'type_id' => $type->id,
		]);
		$response = $this->get(route('part', ['part' => $part]));

		$response->assertStatus(200);
	}
}
