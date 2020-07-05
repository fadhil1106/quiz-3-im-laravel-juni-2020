<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtikelModel extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'judul', 'isi', 'slug', 'tag'
    ];

    public function setSlugAttribute($slug)
    {
        $this->attributes['slug'] = str_replace(' ','-',strtolower($slug));
    }
}
