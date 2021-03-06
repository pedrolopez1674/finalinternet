<?php

namespace App\Policies;

use App\Models\Departamento;
use App\Models\User;

use App\Http\Controllers\DepartamentoController;
use Illuminate\Auth\Access\HandlesAuthorization;



class DepartamentoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
        return $user->tipo == 0;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departamento  $departamento
     * @return mixed
     */
    public function view(User $user, Departamento $departamento)
    {
        //

        return $user->tipo == 0;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
        return $user->tipo == 0;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departamento  $departamento
     * @return mixed
     */
    public function update(User $user, Departamento $departamento)
    {
        //
        return $user->tipo == 0;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departamento  $departamento
     * @return mixed
     */
    public function delete(User $user, Departamento $departamento)
    {
        //
        return $user->tipo == 0;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departamento  $departamento
     * @return mixed
     */
    public function restore(User $user, Departamento $departamento)
    {
        //
        return $user->tipo == 0;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Departamento  $departamento
     * @return mixed
     */
    public function forceDelete(User $user, Departamento $departamento)
    {
        //
        return $user->tipo == 0;
    }
}
