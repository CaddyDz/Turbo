<?php

declare(strict_types=1);

namespace App\Observers;

use App\Receipt;

class ReceiptObserver
{
	/**
	 * Handle the receipt "creating" event.
	 *
	 * @return void
	 */
	public function creating(Receipt $receipt)
	{
		$receipt->user_id = auth()->id();
	}

	/**
	 * Handle the receipt "created" event.
	 *
	 * @return void
	 */
	public function created(Receipt $receipt)
	{
		//
	}

	/**
	 * Handle the receipt "updated" event.
	 *
	 * @return void
	 */
	public function updated(Receipt $receipt)
	{
		//
	}

	/**
	 * Handle the receipt "deleted" event.
	 *
	 * @return void
	 */
	public function deleted(Receipt $receipt)
	{
		//
	}

	/**
	 * Handle the receipt "restored" event.
	 *
	 * @return void
	 */
	public function restored(Receipt $receipt)
	{
		//
	}

	/**
	 * Handle the receipt "force deleted" event.
	 *
	 * @return void
	 */
	public function forceDeleted(Receipt $receipt)
	{
		//
	}
}