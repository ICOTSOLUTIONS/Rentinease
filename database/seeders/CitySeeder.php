<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new City();
        $area->name = 'Dubai'; 
        $area->save();

        $area = new City();
        $area->name = 'Abu Dhabi'; 
        $area->save();

        $area = new City();
        $area->name = 'Sharjah'; 
        $area->save();

        $area = new City();
        $area->name = 'Ras al Khaimah'; 
        $area->save();

        $area = new City();
        $area->name = 'Fujairah'; 
        $area->save();

        $area = new City();
        $area->name = 'Ajmaan'; 
        $area->save();

        $area = new City();
        $area->name = 'Umm Al Quwain'; 
        $area->save();
    }
}
