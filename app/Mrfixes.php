<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mrfixes extends Model
{
    protected $fillable = [
        'date','name','goods','cost','price','amount','all','pro','abode','call','vehicle1','vehicle2','vehicle3','vehicle4'
    ];
}
