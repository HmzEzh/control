<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;


class Prof extends Model{
    public function scopeProfs($query)
    {
        if (Auth::user()->role_id == 2)
        {
            return $query->where('id_user', '=', Auth::user()->id);
        }
        
    }
}

