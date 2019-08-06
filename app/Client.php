<?php

namespace App;

use App\Donation;
use App\Blood_type;
use App\Notification;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $hidden = [
        'password', 'api_token'
    ];

    protected $fillable = ['name', 'email', 'password', 'ld_donation', 'city_id', 'b_d', 'phone', 'blood_type'];

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
}
