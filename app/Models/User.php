<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Fields\HasOne;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /* The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /* The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /* The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Roles():BelongsToMany
    {

        return $this->belongsToMany(Role::class,'user_roles');
    }
    //تعديل 
    public function patient()
    {

        return $this->hasMany(Patient::class);

    }

    public function doctor()
    {

        return $this->hasMany(Doctor::class);

    }

    public function hospital()
    {

        return $this->belongsTo(Hospital::class);

    }

    public function getpermission()
    {
        $permission=[];
        foreach (Auth::user()->Roles as $per)
        {
            foreach ($per->permissions as $pe)
            {
                array_push($permission,$pe->name);
            }
        }
        return $permission;
    }
    public function getRoleadmin()
    {

        foreach (Auth::user()->Roles as $per)
        {
            if($per->name=='Admin')
                return true;
            else
                return false;
        }
    }
}