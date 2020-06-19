<?php

namespace App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Recette extends Model
{
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function recette_user()
    {
        return $this->belongsToMany(Recette_user::class);
    }
   
    
}
