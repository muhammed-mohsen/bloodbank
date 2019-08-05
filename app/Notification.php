<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function users()
    {
        return $this->belongsToManny(User::class);
    }
}
