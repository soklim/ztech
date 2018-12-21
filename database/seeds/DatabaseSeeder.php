<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Category;
use App\SysStatic;
use App\Brand;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $role = Role::create([
            'name'=>'Admin'
        ]);
        $role = Role::create([
            'name'=>'Editor'
        ]);

        $user = \App\User::create([
            'name'=>'Admin',
            'role_id'=>'1',
            'isActive'=>'1',
            'email'=>'admin@ztech.com',
            'password'=>bcrypt('123123')
        ]);
        $user = \App\User::create([
            'name'=>'Admin',
            'role_id'=>'1',
            'isActive'=>'1',
            'email'=>'soklimkheng@ztech.com',
            'password'=>bcrypt('123123')
        ]);

       
    }
}

