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
        // Admin data
        App\User::create(
            [
                "name" => "Obay Hamed",
                "email" => "admin@admin.com",
                "password" => Hash::make("123456"),
                "phone" => "0917815544",
                "agent_type" => "venue",
                "city" => "omdurman",
                "about" => "Obay Hamed asd asd asd asd",
                "address" => "شارع عبيد ختم",
            ]
        );
        App\User::create(
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
        );
        
        // Users Seeder
        factory(App\User::class, 30)->create();

        
    }
}
