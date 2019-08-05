<?php

namespace App;

use App\User;
use App\Donation;
use Illuminate\Database\Eloquent\Model;

class Blood_type extends Model
{
    public function users()
    {
        return $this->belongsToManny(User::class);
    }
    public function donations()
    {
        return $this->belongsToManny(Donation::class);
    }
}
