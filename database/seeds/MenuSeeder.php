<?php

use Illuminate\Database\Seeder;

use App\Menu;
use App\Option;
class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // Meal types
        $meal_type  = Menu::create([
            'name' => "نوع الوجبة",
            'code' => "mealType",
        ]);

        Option::create([
            'name' => "كوكتيل",
            'code' => "cocktail",
            'menu_id' => $meal_type->id
        ]);
        Option::create([
            'name' => "بوفيه",
            'code' => "bofe",
            'menu_id' => $meal_type->id
        ]);

        // Agent types
        $agent_type  = Menu::create([
            'name' => "نوع الصالة",
            'code' => "agentType",
        ]);

        Option::create([
            'name' => "صالة",
            'code' => "hall",
            'menu_id' => $agent_type->id
        ]);
        Option::create([
            'name' => "قاعة",
            'code' => "venue",
            'menu_id' => $agent_type->id
        ]);

        // City types
        $city  = Menu::create([
            'name' => "الولابة",
            'code' => "city",
        ]);

        Option::create([
            'name' => "الخرطوم",
            'code' => "khartoum",
            'menu_id' => $city->id
        ]);
        Option::create([
            'name' => "أم درمان",
            'code' => "omdurman",
            'menu_id' => $city->id
        ]);
        Option::create([
            'name' => "بحري",
            'code' => "bahri",
            'menu_id' => $city->id
        ]);
    }
}
