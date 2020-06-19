<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
   
    
    protected $fillable = [
        'name', 'email', 'password',
    ];

    
    protected $hidden = [
        'password', 'remember_token',
    ];

  
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
   
    public function recettes()
    {
        return $this->belongsToMany(Recette::class, 'Recette_user');
    }
    public function favorie(){
        return $this->belongsToMany('App\User', 'Recette_user', 'user_id', 'recette_id')->withTimestamps();
    }
  
}
