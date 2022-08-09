<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        "book_name", "author", "rating", "voter"
    ];
}
