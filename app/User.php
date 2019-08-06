<?php

namespace App;

use App\City;
use App\Post;
use App\Blood_type;
use App\Notification;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function cities()
    {
        return $this->belongsToMany(City::class);
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function notifications()
    {
        return $this->belongsToManny(Notification::class);
    }
    public function blood_types()
    {
        return $this->belongsToManny(Blood_type::class);
    }
    //     public function posts()
    //         {
    //          return $this->hasManny(Post::class);
    //         }
    // }
}
