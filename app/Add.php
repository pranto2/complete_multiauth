<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    protected $fillable = [
        'image', 'link', 'script',
    ];
}
