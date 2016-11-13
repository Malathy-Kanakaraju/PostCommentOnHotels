<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /*
     * Allow mass assignment option for the following fields
     */
    protected $fillable = ['comment_txt','fk_user_id'];
    
    
    /*
     * Relation between a comment with hotel
     */
    
    public function hotels(){
        return $this->belongsTo(Hotel::class);
    }
}
