<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tservice extends Model
{
    protected $table ='tservices';
    protected $fillable = [
      'icon', 'title', 'link'
    ];
}
