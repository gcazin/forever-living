<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'role_id', 'last_name', 'first_name', 'fbo_number', 'passcode', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->hasOne('App\Role', 'id');
    }

    public static function avatar($user_id)
    {
        $user = User::find($user_id);
        if($user->avatar === 'user.jpg') {
            return asset('https://avatars.dicebear.com/v2/initials/'.substr($user->last_name, 0, 1).substr($user->first_name, 0, 1).'.svg?options[margin]=7');
        }
        return asset('storage/avatars/user.jpg');
    }
}
