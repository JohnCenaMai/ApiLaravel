<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truyencuoi extends Model
{
    //
    public $table = 'truyencuoi';
    protected $fillable = ['mt','service','is_sent','timeCreated'];
    public $timestamps = false;
}
