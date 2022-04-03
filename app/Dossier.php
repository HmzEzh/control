<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;

class Dossier extends Model
{
    public function scopeDossiers($query)
    {
        if (Auth::user()->role_id == 2)
        {
            return $query->where('user_id', '=', Auth::user()->id);
        }
        
    }
}
