<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions=[
            ['name'=>'cud'],
            ['name'=>'show filtrer service/crud post/upgrade/update profile/create request'],
            ['name'=>'accepte request'],
            ['name'=>'assign role/permission'],
        ];
        foreach($permissions as $k){
            Permission::create($k);
        }
    }
}
