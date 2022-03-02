<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function tests()
    {
        return $this->hasMany(Test::class);
    }
}
