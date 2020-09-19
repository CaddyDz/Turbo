<?php

declare(strict_types=1);

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InvoicePolicy
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
	public function view(User $user)
	{
		return $user->hasPermissionTo('Read Invoices');
	}

	/**
	 * Determine whether the user can create models.
	 */
	public function create(User $user)
	{
		return $user->hasPermissionTo('Add Invoices');
	}

	/**
	 * Determine whether the user can update the model.
	 */
	public function update(User $user)
	{
		return $user->hasPermissionTo('Edit Invoices');
	}

	/**
	 * Determine whether the user can delete the model.
	 */
	public function delete(User $user)
	{
		return $user->hasPermissionTo('Delete Invoices');
	}

	/**
	 * Determine whether the user can restore the model.
	 */
	public function restore(User $user)
	{
		//
	}

	/**
	 * Determine whether the user can permanently delete the model.
	 */
	public function forceDelete(User $user)
	{
		//
	}
}
