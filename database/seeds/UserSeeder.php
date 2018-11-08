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
        $user = User::create([
            
            // [
                "name" => "Obay Hamed",
                "email" => "obay@obay.com",
                "password" => Hash::make("123456"),
                "phone" => "0917815544",
                "agent_type" => "hall",
                "about" => "Obay Hamed asd asd asd asd",
            // ]
            
        ]);
    }
}
