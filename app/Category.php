<?php

namespace App;

use App\Post;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function psots()
    {
        return $this->hasMany(Post::class);
    }
}
