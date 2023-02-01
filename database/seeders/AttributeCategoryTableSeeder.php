<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributeCategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attribute_category')->delete();
        
        \DB::table('attribute_category')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'attribute_id' => 2,
                'created_at' => '2022-05-25 21:17:41',
                'updated_at' => '2022-05-25 21:17:41',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 1,
                'attribute_id' => 1,
                'created_at' => '2022-05-25 21:19:52',
                'updated_at' => '2022-05-25 21:19:52',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 5,
                'attribute_id' => 1,
                'created_at' => '2022-05-25 21:29:46',
                'updated_at' => '2022-05-25 21:29:46',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 11,
                'attribute_id' => 1,
                'created_at' => '2022-05-25 21:40:29',
                'updated_at' => '2022-05-25 21:40:29',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 11,
                'attribute_id' => 2,
                'created_at' => '2022-05-25 21:40:29',
                'updated_at' => '2022-05-25 21:40:29',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 12,
                'attribute_id' => 1,
                'created_at' => '2022-05-25 21:41:07',
                'updated_at' => '2022-05-25 21:41:07',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 12,
                'attribute_id' => 2,
                'created_at' => '2022-05-25 21:41:07',
                'updated_at' => '2022-05-25 21:41:07',
            ),
        ));
        
        
    }
}