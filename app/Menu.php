<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    
    protected $fillable = ['code','name','order'];

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public static function getMenu(string $code){
        try{
            return Menu::where('code',$code)->first()->settings()->orderBy('order','asc')->get(['id','code','name']);
        }catch (\Error $e){
            return [];
        }
    }
}
