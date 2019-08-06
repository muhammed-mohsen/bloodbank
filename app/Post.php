<?php

namespace App;

use App\User;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function category()
    {
        return $this->belongsto(Category::class);
    }

    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }
}
