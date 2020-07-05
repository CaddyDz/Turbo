<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class PartReceipt extends Pivot
{
	/**
	 * Indicates if the IDs are auto-incrementing.
	 *
	 * @var bool
	 */
	public $incrementing = true;
}
