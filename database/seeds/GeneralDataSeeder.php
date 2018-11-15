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


    }
}
