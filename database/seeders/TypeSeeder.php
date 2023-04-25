<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type=[
            ['label'=>'appartement','count'=>1],
            ['label'=>'cottage','count'=>1.5],
            ['label'=>'mansion','count'=>4],
            ['label'=>'manor','count'=>3],
            ['label'=>'school','count'=>2.5],
            ['label'=>'hotel','count'=>4.5]
        ];
        foreach($type as $k){
            Type::create($k);
        }
    }
}
