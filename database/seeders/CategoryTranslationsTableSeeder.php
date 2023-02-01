<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoryTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('category_translations')->delete();
        
        \DB::table('category_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'category_id' => 1,
                'name' => 'Fashion',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:15:45',
                'updated_at' => '2022-05-25 15:19:52',
            ),
            1 => 
            array (
                'id' => 2,
                'category_id' => 2,
                'name' => 'Groceries',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:23:13',
                'updated_at' => '2022-05-25 15:23:13',
            ),
            2 => 
            array (
                'id' => 3,
                'category_id' => 3,
                'name' => 'Health & Beauty',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:24:45',
                'updated_at' => '2022-05-25 15:24:45',
            ),
            3 => 
            array (
                'id' => 4,
                'category_id' => 4,
                'name' => 'Home & Lifestyle',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:26:19',
                'updated_at' => '2022-05-25 15:26:19',
            ),
            4 => 
            array (
                'id' => 5,
                'category_id' => 5,
                'name' => 'Mobiles & Tablets',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:29:46',
                'updated_at' => '2022-05-25 15:29:46',
            ),
            5 => 
            array (
                'id' => 6,
                'category_id' => 6,
                'name' => 'Sports & Outdoors',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:31:03',
                'updated_at' => '2022-05-25 15:31:03',
            ),
            6 => 
            array (
                'id' => 7,
                'category_id' => 7,
                'name' => 'Electronics & Appliance',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:32:18',
                'updated_at' => '2022-05-25 15:32:18',
            ),
            7 => 
            array (
                'id' => 8,
                'category_id' => 8,
                'name' => 'Computers & Laptops',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:34:46',
                'updated_at' => '2022-05-25 15:34:46',
            ),
            8 => 
            array (
                'id' => 9,
                'category_id' => 9,
                'name' => 'Men',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:37:15',
                'updated_at' => '2022-05-25 15:37:15',
            ),
            9 => 
            array (
                'id' => 10,
                'category_id' => 10,
                'name' => 'Women',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:38:25',
                'updated_at' => '2022-05-25 15:38:25',
            ),
            10 => 
            array (
                'id' => 11,
                'category_id' => 11,
                'name' => 'Girls',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:40:29',
                'updated_at' => '2022-05-25 15:40:29',
            ),
            11 => 
            array (
                'id' => 12,
                'category_id' => 12,
                'name' => 'Boys',
                'lang' => 'en',
                'created_at' => '2022-05-25 15:41:07',
                'updated_at' => '2022-05-25 15:41:07',
            ),
        ));
        
        
    }
}