<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;
use TCG\Voyager\Traits\Translatable;

class Prof extends Model{
    use Translatable;
    protected $translatable = ['title', 'body'];
    public function scopeProfs($query)
    {
        if (Auth::user()->role_id == 2)
        {
            return $query->where('id_user', '=', Auth::user()->id);
        }
        
    }
}

