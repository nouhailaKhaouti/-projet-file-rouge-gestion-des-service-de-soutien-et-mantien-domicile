<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([TagSeeder::class]);
        $this->call([CategorySeeder::class]);
        $this->call([TypeSeeder::class]);
        $this->call([ServicesSeeder::class]);
        $this->call([PermissionSedeers::class]);
        $this->call([RoleSedeers::class]);
    }
}
