<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');

            // general data
            $table->integer('agent_id');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('third_name');
            $table->string('fourth_name');
            
            $table->string('ssn');
            $table->string('phone');
            $table->string('email')->nullable();
        
            // booking data
            $table->date('date')->nullable();
            $table->time('from')->nullable();
            $table->time('to')->nullable();
            $table->string('period')->nullable();
            
            // meal ID
            $table->integer('meal_id')->nullable();

            
            // payment data
            $table->string('payment_type')->nullable();
            $table->integer('bank_id')->nullable();

            // status
            $table->integer('status')->default(0);
            // steps
            $table->string('steps')->default("info");
            $table->integer('total')->nullable();
            
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
