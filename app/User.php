<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use \Illuminate\Support\Collection;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'is_admin', 'agent_type', 'about', 'city', 'address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function photos(){
        return $this->hasMany("App\Photo");
    }

    public function reviews(){
        return $this->hasMany("App\Review");
    }

    public function get_bookings(){
        return $this->hasMany("App\Booking", "agent_id");
    }

    public function rating(){
        $sum = 0;
        foreach ($this->reviews as $review) {
            $sum += $review->rating;
        }
        if($this->reviews->count() > 0){

            $sum =  $sum / $this->reviews->count();
        }

        return $sum;
    }

    public function services(){
        return $this->belongsToMany("App\Service")->withPivot(['service_id']);
    }
    public function prices(){
        return $this->hasMany("App\Price", "agent_id");
    }

    public function get_price(){
        $price = $this->prices()->orderBy('price', "DESC")->first();
        return $price->price;
    }

    public function meals(){
        return $this->hasMany("App\Meal", "agent_id");
    }

    // search attributes
    // name
    public function scopeFilter($query, $fields){
        
        // $type_results = new Collection();
        // $name_results = new Collection();
        // $city_results = new Collection();
        $agents = new Collection();


        // using type
        if(!empty($fields['type'])){
            $agents = $agents->merge($this::type($fields['type'])->get());
        }
        
        // using name
        if(!empty($fields['name'])){
            $agents = $agents->merge($this::name($fields['name'])->get());
        }

        // using city
        if(!empty($fields['city'])){
            $agents = $agents->merge($this::city($fields['city'])->get());
        }
    
        // using address
        if(!empty($fields['address'])){
            $agents = $agents->merge($this::address($fields['address'])->get());
        }


        // using services
        if(!empty($fields['services'])){
            
            $agents = $agents->merge($this::hasServices($fields['services'])->get());
        }

        // using price
        if(!empty($fields['price'])){
            
            $agents = $agents->merge($this::price($fields['price'])->get());
        }

        // $agents = array_merge($type_results->toArray(), $name_results->toArray());
        $agents = $agents->unique();



        // Result 
        $agents = $this::type($fields['type'])
            ->city($fields['city'])
            
            ->price($fields['price']);

        // using services
        if(!empty($fields['services'])){
            $agents = $agents->get()->filter(function($agent) use ($fields){
                foreach ($fields['services'] as $service) {
                    if(in_array(1, $fields['services'])){
                        return $agent;
                    }
                }
            });
        
        }
        
        return $agents;
    }
    // name
    public function scopeName($query, $name){
        
        return $query->where("name", "like", "%$name%");
    }

    // city
    public function scopeCity($query, $city){
        return $query->where("city", $city);
    }

    // address
    public function scopeAddress($query, $address){
        return $query->where("address", "like", "%$address%");
    }

    // type
    public function scopeType($query, $type){
        return $query->where("agent_type", $type);
    }

    // services
    public function scopeHasServices($query, $services){
        return $query->whereHas("services", function($q) use($services){
            $q->whereIn('service_id', $services);
        });
    }

    // prices
    public function scopePrice($query, $price){
        return $query->whereHas("prices", function($q) use($price){
            $q->where('price', ">", $price);
        });
    }

    // Booking
    public function scopeBooking($query, $date){
        return $query->whereHas("bookings", function($q) use($date){
            $q->where('price', ">", $price);
        });
    }
}
