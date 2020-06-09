<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
   
    public function postLike(){
        return $this->belongsTo(Recette::class,'recette_id');
        }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function users() {
    return $this->belongsTo('App\User');
    }
    
}
