<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap services.
	 *
	 * Register observers.
	 *
	 * @return void
	 */
	public function boot(): void
	{
		\App\Part::observe(\App\Observers\PartObserver::class);
		\App\Profile::observe(\App\Observers\ProfileObserver::class);
		\App\Type::observe(\App\Observers\TypeObserver::class);
		\App\Category::observe(\App\Observers\CategoryObserver::class);
		\App\Invoice::observe(\App\Observers\InvoiceObserver::class);
		\App\Receipt::observe(\App\Observers\ReceiptObserver::class);
		\App\Brand::observe(\App\Observers\BrandObserver::class);
		\App\Review::observe(\App\Observers\ReviewObserver::class);
		\App\Order::observe(\App\Observers\OrderObserver::class);
		\App\User::observe(\App\Observers\UserObserver::class);
		\App\Store::observe(\App\Observers\StoreObserver::class);
		\App\StoreContact::observe(\App\Observers\StoreContactObserver::class);
		\App\StoreAbout::observe(\App\Observers\StoreAboutObserver::class);
		\App\Supplier::observe(\App\Observers\SupplierObserver::class);
		\App\Garage::observe(\App\Observers\GarageObserver::class);
		\App\VehicleModel::observe(\App\Observers\VehicleModelObserver::class);
		\App\Engine::observe(\App\Observers\EngineObserver::class);
	}
}
