<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageTranslation extends Model
{
    protected $fillable = ['title', 'text','meta_description','meta_title'];
    public $timestamps = false;
}
