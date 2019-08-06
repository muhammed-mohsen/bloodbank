<?php

namespace App;

use App\User;
use App\Donation;
use Illuminate\Database\Eloquent\Model;

class Blood_type extends Model
{
    public function clients()
    {
        return $this->belongsToManny(User::class);
    }
    public function donations()
    {
        return $this->belongsToManny(Donation::class);
    }
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
