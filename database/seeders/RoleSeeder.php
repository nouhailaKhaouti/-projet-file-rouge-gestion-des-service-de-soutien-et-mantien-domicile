<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //        
        $roles=[
            ['name'=>'Admin'],
            ['name'=>'User'],
            ['name'=>'Provider'],
            ['name'=>'Company'],
        ];
        foreach($roles as $role){
            Role::create($role);
        }
    }
}
