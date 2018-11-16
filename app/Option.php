<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['code','name','order'];

    public static function get_name($code)
    {
        return Option::where('code', $code)->limit(1)->get()->first()->name;
    }
}
