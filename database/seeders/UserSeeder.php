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
        $role->name = 'superadmin';
        $role->save();

        $role = new Role();
        $role->name = 'subadmin';
        $role->save();

        $role = new Role();
        $role->name = 'agent';
        $role->save();

        $role = new Role();
        $role->name = 'customer';
        $role->save();

        $user = new User();
        $user->role_id = 1;
        $user->fname = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make(12345678);
        $user->save();

        $user = new User();
        $user->role_id = 2;
        $user->fname = 'superadmin';
        $user->email = 'superadmin@gmail.com';
        $user->password = Hash::make(12345678);
        $user->save();

        $user = new User();
        $user->role_id = 3;
        $user->fname = 'subadmin';
        $user->email = 'subadmin@gmail.com';
        $user->password = Hash::make(12345678);
        $user->save();

        // $user = new User();
        // $user->role_id = 4;
        // $user->name = 'agent';
        // $user->email = 'agent@gmail.com';
        // $user->password = Hash::make(12345678);
        // $user->save();
    }
}
