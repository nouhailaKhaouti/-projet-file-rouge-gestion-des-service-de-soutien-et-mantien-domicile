<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $services=[
            ['label'=>'cleaning'],
            ['label'=>'electric maintenance'],
            ['label'=>'decoration'],
        ];
        foreach($services as $k){
            Service::create($k);
        }
    }
}
