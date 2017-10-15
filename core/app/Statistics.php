<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistics extends Model
{
    protected  $table = 'statistics';
    protected $fillable = [
      'icon', 'b_text', 's_text',
    ];
}
