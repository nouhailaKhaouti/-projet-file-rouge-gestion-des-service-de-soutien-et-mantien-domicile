<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $tags=[
            ['label'=>'cleaning beauty'],
            ['label'=>'electric maintenance'],
            ['label'=>'deep cleaning'],
            ['label'=>'decoration'],
            ['label'=>'process of house cleaning '],
            ['label'=>'knowleg about cleaning']
        ];
        foreach($tags as $k){
            Tag::create($k);
        }
    }
}
