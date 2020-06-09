<?php

namespace App;
use App\Recette;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Favorie extends Model
{
    public function recettes()
    {
      
        return $this->belongsTo(Recette::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'favorie_id');
    }
    public function postLike(){
        return $this->belongsTo(Recette::class);
        }
}
