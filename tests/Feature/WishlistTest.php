<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class WishlistTest extends TestCase
{
	use DatabaseMigrations;

	/**
	 * Test wishlist index route.
	 */
	public function test_wishlist_index_page(): void
	{
		$response = $this->get('/wishlist');

		$response->assertOk();
	}
}