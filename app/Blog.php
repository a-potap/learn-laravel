<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    public $timestamps = false;



    public function getPreview() {
        return mb_substr($this->text, 0, 250);
    }

    public function getCompiled_text($text = null)
    {

        return preg_replace(
            "/(\{\-\-picfiledir?)(.*?)(\*\*.*--}?)/u", '<img src="/filedir$2" class="img-responsive">',
            is_null($text) ? $this->text : $text
        );
    }

    public function comments()
    {
        return $this->hasMany('App\Comment', 'idpost');
    }
}
