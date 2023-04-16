<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $categories=[
            ['label'=>'annonce'],
            ['label'=>'Activitie'],
            ['label'=>'opportinitie']
        ];
        foreach($categories as $k){
            Category::create($k);
        }
    }
}
