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

        foreach($users as $user){

            User::create($user);
        }
    }
}
