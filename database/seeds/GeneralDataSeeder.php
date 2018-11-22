<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
class GeneralDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Meal */
        factory(App\Meal::class, 30)->create();

         /* Services */
         factory(App\Service::class, 30)->create();


        /* PRICES */

        // Prices seeder
        $length = 0;
        $prices = [];
        while($length != 10){
            $price = [
                'agent_id' => rand(1,10),
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now(),
                'price' => rand(1000,100000),
            ];
            array_push($prices, $price);
            $length++;
        }

        DB::table('prices')->insert($prices);


        /* Bank */

        // Bank seeder
        $length = 0;
        $banks = [];
        while($length != 10){
            $bank = [
                'name' => str_random(10),
                'number' => rand(1,10),
                'expired_at' => Carbon::now(),
                'credit' => rand(1000,100000),
            ];
            array_push($banks, $bank);
            $length++;
        }

        DB::table('banks')->insert($banks);



        
    }
}
