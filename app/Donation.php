<?php

namespace App;

use App\City;
use App\Blood_type;
use App\Notification;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpKernel\Client;

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
    public function client()
    {
        return $this->belongsTo(Client::class);
    }
    public function notification()
    {
        return $this->belongTo(Notification::class);
    }
}
