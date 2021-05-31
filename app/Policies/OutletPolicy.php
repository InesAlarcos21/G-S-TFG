<?php

namespace App\Policies;

use App\Http\Resources\Outlet;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OutletPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function view(User $user, Outlet $outlet)
    {
        return true; 
    }
    public function create(User $user, Outlet $outlet)
    {
        return true; 
    }
    public function update(User $user, Outlet $outlet)
    {
        return true; 
    }
    public function delete(User $user, Outlet $outlet)
    {
        return true; 
    }

}
