<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;
//use App\Rating;
class RatingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run(): void
    {
        $ratingRecords =[
            ['id'=>2,'user_id'=>1,'product_id'=>2,'review'=>'Excellent product','rating'=>5,'status'=>0],
            ['id'=>1,'user_id'=>1,'product_id'=>1,'review'=>'very good product','rating'=>4,'status'=>0],
            ['id'=>3,'user_id'=>2,'product_id'=>1,'review'=>'Product is note good at all','rating'=>1,'status'=>0],
            //['id'=>4,'user_id'=>1,'product_id'=>1,'review'=>'very good','rating'=>2,'status'=>0],
            //['id'=>5,'user_id'=>1,'product_id'=>1,'review'=>'very good','rating'=>1,'status'=>0]
        ];
Rating::insert($ratingRecords);
    }
}
