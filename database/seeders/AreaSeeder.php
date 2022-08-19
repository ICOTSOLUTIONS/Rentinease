<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $area = new Area();
        $area->city_id = 1; 
        $area->name = 'Abu Hail'; 
        $area->save();

        $area = new Area();
        $area->city_id = 2; 
        $area->name = 'Al Awir First'; 
        $area->save();
        
        $area = new Area();
        $area->city_id = 3; 
        $area->name = 'Al Awir Second'; 
        $area->save();
    }
}
