<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AfilateAdd extends Model
{
    protected $table = 'affilateadds';
    protected $fillable = [
        'link', 'image_size', 'image', 'type', 'script',
    ];
}
