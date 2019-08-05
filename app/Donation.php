<?php

namespace App;

use App\City;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function cities()
    {
        return $this->belongsTonManny(City::class);
    }
}
