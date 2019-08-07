<?php

namespace App;

use App\Donation;
use App\Blood_type;
use App\Notification;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Client as Authenticatable;

class Client extends Authenticatable
{

    protected $hidden = [
        'password', 'api_token', 'pin_code'
    ];

    protected $fillable = ['name', 'email', 'password', 'ld_donation', 'city_id', 'b_d', 'phone', 'blood_type'];
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
    public function blood_type()
    {
        return $this->hasMany(Blood_type::class);
    }
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }
    //     public function posts()
    //         {
    //          return $this->hasManny(Post::class);
    //         }
    // }
    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
