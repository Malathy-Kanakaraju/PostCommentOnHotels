<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    /*
     * Relation between hotels and comments 
     */
    
    public function comments() 
    {
        return $this->hasMany(Comment::class);
    }
}
