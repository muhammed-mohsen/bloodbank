<?php

namespace App;

use App\User;
use App\Donation;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function users()
    {
        return $this->belongsToManny(User::class);
    }
    public function donation()
    {
        return $this->hasOne(Donation::class);
    }
}
