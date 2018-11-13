<?php

use Illuminate\Database\Seeder;

use App\User;
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
                "email" => "obay@obay.com",
                "password" => Hash::make("123456"),
                "phone" => "0917815544",
                "agent_type" => "hall",
                "about" => "Obay Hamed asd asd asd asd",
            ],
            [
                "name" => "درة بحري",
                "email" => "dorat@obay.com",
                "password" => Hash::make("123456"),
                "phone" => "0917815544",
                "agent_type" => "hall",
                "about" => "Obay Hamed asd asd asd asd",
            ]
        ];

        $length = 0;
        while($length != 50){
            $user = [
                'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'phone' => str_random(10),
            "agent_type" => "hall",
                "about" => str_random(100),
            ];
            array_push($users, $user);
            $length++;
        }

        DB::table('users')->insert($users);
    }
}
