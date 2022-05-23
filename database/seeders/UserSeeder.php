<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->save();

        $role = new Role();
        $role->name = 'agent';
        $role->save();

        $user = new User();
        $user->role_id = 1;
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make(12345678);
        $user->save();

    }
}
