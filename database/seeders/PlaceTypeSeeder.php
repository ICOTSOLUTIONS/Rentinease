<?php

namespace Database\Seeders;

use App\Models\PlaceType;
use App\Models\PropertyTypePlace;
use Illuminate\Database\Seeder;

class PlaceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place_type = new PlaceType();
        $place_type->name = 'Commercial';
        $place_type->save();

        $place_type = new PlaceType();
        $place_type->name = 'Residential';
        $place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Office Space';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Retail';
        $property_place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Shop';
        $property_place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'WareHouse';
        $property_place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Villa';
        $property_place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'ShowRoom';
        $property_place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Full Flop';
        $property_place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Whole Building';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Bulk Units';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Staff Accommodation';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Labour Camp';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Factory';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Business Center';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Co-Working Space';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Virtual Office';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 1;
        $property_place_type->name = 'Farm';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Appartment';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Villa';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'TownHouse';
        $property_place_type->save();

        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Compound';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Duplex';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'PhantHouse';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Full Floor';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Whole Building';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Bulk Units';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Bangalow';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Hotel Room';
        $property_place_type->save();
        
        $property_place_type = new PropertyTypePlace();
        $property_place_type->place_type_id = 2;
        $property_place_type->name = 'Appartments';
        $property_place_type->save();
        
    }
}
