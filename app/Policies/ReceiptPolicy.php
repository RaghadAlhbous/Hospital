<?php

namespace App\Policies;

use App\Models\Receipt;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReceiptPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('view_Receipt',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Receipt $receipt)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('view_Receipt',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('create_Receipt',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Receipt $receipt)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Edit_Receipt',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Receipt $receipt)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Delete_Receipt',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Receipt $receipt)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Store_Receipt',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Receipt  $receipt
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Receipt $receipt)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Delete_Receipt',$user->getpermission()))
            return true;
        else
            return false;
    }
}
