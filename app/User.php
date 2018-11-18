<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'is_admin', 'agent_type', 'about', 'city', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photos(){
        return $this->hasMany("App\Photo");
    }

    public function services(){
        return $this->belongsToMany("App\Service");
    }
    public function prices(){
        return $this->hasMany("App\Price", "agent_id");
    }

    public function meals(){
        return $this->hasMany("App\Meal", "agent_id");
    }
}
