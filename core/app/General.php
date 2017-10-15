<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    protected $table = 'generals';
    protected $fillable = [
        'name', 'color','mobile','email',
        'pay_email','footer','top_text',
        'footer_text',
    ];
}
