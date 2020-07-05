<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class PrintReceipt extends Action
{
	use InteractsWithQueue, Queueable;

	/**
	 * Get the displayable name of the action.
	 *
	 * @return string
	 */
	public function name(): string
	{
		return __('Print Receipt');
	}

	/**
	 * Perform the action on the given models.
	 *
	 * @param  \Laravel\Nova\Fields\ActionFields  $fields
	 * @param  \Illuminate\Support\Collection  $models
	 * @return mixed
	 */
	public function handle(ActionFields $fields, Collection $models)
	{
		foreach ($models as $receipt) {
			return Action::redirect("/print/receipt/$receipt->id");
		}
	}

	/**
	 * Get the fields available on the action.
	 *
	 * @return array
	 */
	public function fields()
	{
		return [];
	}
}
