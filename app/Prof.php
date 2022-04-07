<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Auth;
use TCG\Voyager\Traits\Translatable;

class Prof extends Model{
    use Translatable;
    protected $translatable = ['title', 'body'];
    // Loads all translations
$posts = Post::with('translations')->get();

// Loads all translations
$posts = Post::all();
$posts->load('translations');

// Loads all translations
$posts = Post::withTranslations()->get();

// Loads specific locales translations
$posts = Post::withTranslations(['en', 'da'])->get();

// Loads specific locale translations
$posts = Post::withTranslation('da')->get();

// Loads current locale translations
$posts = Post::withTranslation('da')->get();
    public function scopeProfs($query)
    {
        if (Auth::user()->role_id == 2)
        {
            return $query->where('id_user', '=', Auth::user()->id);
        }
        
    }
}

