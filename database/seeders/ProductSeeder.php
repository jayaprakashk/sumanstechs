<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; 


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,3) as $index){
            
        DB::table('products')->insert([
            'name' => $faker->sentence(5), 
            'price'=> $faker->numberBetween($min =10, $max = 10000),
            'description' => $faker->sentence(5), 
                
            ]);

            }
    }
}
