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

    public static function get_menu(string $code){
        try{
            return Menu::where('code',$code)->first();//->options;//->get(['id','code','name']);
        }catch (\Error $e){
            return [];
        }
    }
}
