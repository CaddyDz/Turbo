<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Supplier extends Model
{
	public function user(): BelongsTo
	{
		return $this->belongsTo(User::class);
	}
}
