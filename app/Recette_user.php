<?php

namespace App;
use App\Recette;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Recette_user extends Model
{
   
    public function user()
    {
        return $this->belongsTo(User::class, 'favorie_id');
    }
    
   
    
}
