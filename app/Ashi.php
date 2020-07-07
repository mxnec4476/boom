<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ashi extends Model
{
    protected $fillable = [
        'date','name','goods','cost','price','amount','all','pro','abode','call'
    ];
}
