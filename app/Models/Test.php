<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    /**
     * Get the comments for the blog post.
     */
    public function player()
    {
        return $this->belongsTo(Player::class);
    }
}
