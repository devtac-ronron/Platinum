<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;


    /**
     * create
     *
     * @param  mixed $user
     * @return void
     */
    public function create(User $user)
    {
        if ($user instanceof User && $user->exists) {
            return Response::allow();
        }

        return Response::deny("You don't have permission to create", 401);
    }

    /**
     * show
     *      
     * @param  mixed $user
     * @return void
     */
    public function show(User $user)
    {
        if ($user instanceof User && $user->exists) {
            return Response::allow();
        }

        return Response::deny("You don't have permission to show", 401);
    }
}