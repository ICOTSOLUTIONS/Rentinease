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
        $areas = json_decode(file_get_contents(public_path('area.json')));
            foreach($areas as $area){
                $newareas = new Area();
                $newareas->city_name = $area->city_name;
                $newareas->area_name = $area->area_name;
                $newareas->admin_level = $area->admin_level;
                $newareas->save();
            }
    }
}
