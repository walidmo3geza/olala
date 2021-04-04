<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'index_name', 'lesson', 'image_url',
    ];
}
