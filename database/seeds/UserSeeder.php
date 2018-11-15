<?php

use Illuminate\Database\Seeder;

use App\User;
use \Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  [
            [
                "name" => "Obay Hamed",
                "email" => "admin@admin.com",
                "password" => Hash::make("123456"),
                "phone" => "0917815544",
                "agent_type" => "venue",
                "city" => "omdurman",
                "about" => "Obay Hamed asd asd asd asd",
                "address" => "شارع عبيد ختم",
            ],
            [
                "name" => "درة بحري",
                "email" => "agent@agent.com",
                "password" => Hash::make("123456"),
                "phone" => "0917815544",
                "agent_type" => "venue",
                "city" => "bahri",
                "about" => "Obay Hamed asd asd asd asd",
                "address" => "شارع  أفريقيا",
            ]
        ];

        // Users Seeder
        $length = 0;
        while($length != 10){
            $user = [
                
                'name' => str_random(10),
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('secret'),
                'phone' => str_random(10),
                "agent_type" => "hall",
                "city" => "khartoum",
                "about" => str_random(100),
                "address" => "شارع  أفريقيا",
            ];
            array_push($users, $user);
            $length++;
        }
        DB::table('users')->insert($users);

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
