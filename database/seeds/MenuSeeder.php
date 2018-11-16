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
    }
}
