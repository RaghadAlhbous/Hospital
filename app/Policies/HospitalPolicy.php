<?php

namespace App\Policies;

use App\Models\Hospital;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HospitalPolicy
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

        if(in_array('View_Hospital',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Hospital $hospital)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('View_Hospital',$user->getpermission()))
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

        if(in_array('create_Hospital',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Hospital $hospital)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Edit_Hospital',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Hospital $hospital)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Delete_Hospital',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Hospital $hospital)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Store_Hospital',$user->getpermission()))
            return true;
        else
            return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Hospital $hospital)
    {
        if($user->getRoleadmin())
            return true;

        if(in_array('Delete_Hospital',$user->getpermission()))
            return true;
        else
            return false;
    }
}
