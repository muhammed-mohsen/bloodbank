<?php

namespace App;

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
}
