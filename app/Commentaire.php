<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
