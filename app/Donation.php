<?php

namespace App;

use App\City;
use App\Blood_type;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    public function cities()
    {
        return $this->belongsTonManny(City::class);
    }
    public function blood_types()
    {
        return $this->belongsToManny(Blood_type::class);
    }
}
