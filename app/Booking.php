<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        // general data
        'agent_id', 'name', 'ssn', 'phone', 'email', 
        
        // booking data
        'from', 'to',
        // payment data
        'agent_id', 
    ];

}
