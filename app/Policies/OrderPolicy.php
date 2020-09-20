<?php

declare(strict_types=1);

namespace App\Policies;

use App\User;
use App\Order;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
	use HandlesAuthorization;

	/**
	 * Determine whether the user can view any models.
	 */
	public function viewAny(User $user)
	{
		return $user->hasRole('Super Admin');
	}

	/**
	 * Determine whether the user can view the model.
	 */
	public function view(User $user, Order $order)
	{
		return $user->hasPermissionTo('Add Orders');
	}

	/**
	 * Determine whether the user can create models.
	 */
	public function create(User $user)
	{
		return $user->hasPermissionTo('Add Orders');
	}

	/**
	 * Determine whether the user can update the model.
	 */
	public function update(User $user, Order $order)
	{
		return $user->hasPermissionTo('Edit Orders');
	}

	/**
	 * Determine whether the user can delete the model.
	 */
	public function delete(User $user, Order $order)
	{
		return $user->hasPermissionTo('Delete Orders');
	}

	/**
	 * Determine whether the user can restore the model.
	 */
	public function restore(User $user, Order $order)
	{
		return $user->hasPermissionTo('Restore Orders');
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 */
	public function forceDelete(User $user, Order $order)
	{
		return $user->hasPermissionTo('ForceDelete Orders');
	}
}
