<?php

namespace App;

use App\User;
use App\Donation;
use App\Governorate;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function governorate()
    {
        return $this->belongsTo(Governorate::class);
    }
    public function donations()
    {
        return $this->belongsToManny(Donation::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
