<?php

namespace App;

use App\City;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
