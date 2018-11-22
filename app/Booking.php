<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model implements \MaddHatter\LaravelFullcalendar\Event
{
    protected $fillable = [
        // general data
        'agent_id', 'first_name', 'second_name', 'third_name', 'fourth_name', 'ssn', 'phone', 'email', 
        
        // booking data
        "date", 'from', 'to', "period",
        // payment data
        'payment_type', "bank_id", "total" 
    ];

    public function agent(){
        return $this->belongsTo("App\User");
    }

    // for calendar usage
    protected $dates = ['start', 'end'];

    public function name() {
		return $this->first_name . " " . $this->second_name . " " . $this->third_name . " " . $this->fourth_name ;
    }
    
    public function getId() {
		return $this->id;
	}

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->name();
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return (bool)$this->period;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->created_at;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->created_at;
    }


}
