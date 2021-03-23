<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Page extends Model implements TranslatableContract
{
    use Translatable;

    public $translatedAttributes = ['title', 'text','meta_description','meta_title'];

    protected $fillable = ['slug','image'];
}
