<?php

namespace Database\Seeders;

use App\Models\Purpose;
use Illuminate\Database\Seeder;

class PurposeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $place_type = new Purpose();
        $place_type->name = 'Rent';
        $place_type->save();

        $place_type = new Purpose();
        $place_type->name = 'Sale';
        $place_type->save();
    }
}
