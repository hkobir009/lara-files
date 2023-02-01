<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Fashion',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '43',
                'icon' => '43',
                'featured' => 1,
                'top' => 1,
                'digital' => 0,
                'slug' => 'fashion',
                'meta_title' => 'Fashion',
                'meta_description' => 'Fashion',
                'created_at' => '2022-05-25 21:19:51',
                'updated_at' => '2022-05-25 15:19:51',
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Groceries',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '24',
                'icon' => '27',
                'featured' => 1,
                'top' => 0,
                'digital' => 0,
                'slug' => 'groceries',
                'meta_title' => 'Groceries',
                'meta_description' => 'Groceries',
                'created_at' => '2022-05-25 21:23:12',
                'updated_at' => '2022-05-25 15:23:12',
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Health & Beauty',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '45',
                'icon' => '45',
                'featured' => 1,
                'top' => 1,
                'digital' => 0,
                'slug' => 'health & beauty',
                'meta_title' => 'Health & Beauty',
                'meta_description' => 'Health & Beauty',
                'created_at' => '2022-05-25 21:24:44',
                'updated_at' => '2022-05-25 15:24:44',
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Home & Lifestyle',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '46',
                'icon' => '46',
                'featured' => 0,
                'top' => 0,
                'digital' => 0,
                'slug' => 'Home--Lifestyle-ilQEJ',
                'meta_title' => 'Home & Lifestyle',
                'meta_description' => 'Home & Lifestyle',
                'created_at' => '2022-05-25 15:26:19',
                'updated_at' => '2022-05-25 15:26:19',
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Mobiles & Tablets',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '20',
                'icon' => '48',
                'featured' => 1,
                'top' => 0,
                'digital' => 1,
                'slug' => 'Mobiles--Tablets-DxHMd',
                'meta_title' => 'Mobiles & Tablets',
                'meta_description' => 'Mobiles & Tablets',
                'created_at' => '2022-05-25 21:29:51',
                'updated_at' => '2022-05-25 15:29:51',
            ),
            5 => 
            array (
                'id' => 6,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Sports & Outdoors',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '45',
                'icon' => '5',
                'featured' => 0,
                'top' => 0,
                'digital' => 0,
                'slug' => 'Sports--Outdoors-z6zsb',
                'meta_title' => 'Sports & Outdoors',
                'meta_description' => 'Sports & Outdoors',
                'created_at' => '2022-05-25 15:31:02',
                'updated_at' => '2022-05-25 15:31:02',
            ),
            6 => 
            array (
                'id' => 7,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Electronics & Appliance',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '40',
                'icon' => '41',
                'featured' => 1,
                'top' => 0,
                'digital' => 0,
                'slug' => 'Electronics--Appliance-nE04x',
                'meta_title' => 'Electronics & Appliance',
                'meta_description' => 'Electronics & Appliance',
                'created_at' => '2022-05-25 21:32:23',
                'updated_at' => '2022-05-25 15:32:23',
            ),
            7 => 
            array (
                'id' => 8,
                'parent_id' => 0,
                'level' => 0,
                'name' => 'Computers & Laptops',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '2',
                'icon' => '49',
                'featured' => 0,
                'top' => 0,
                'digital' => 0,
                'slug' => 'Computers--Laptops-XN813',
                'meta_title' => 'Computers & Laptops',
                'meta_description' => 'Computers & Laptops',
                'created_at' => '2022-05-25 15:34:45',
                'updated_at' => '2022-05-25 15:34:45',
            ),
            8 => 
            array (
                'id' => 9,
                'parent_id' => 1,
                'level' => 1,
                'name' => 'Men',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '35',
                'icon' => '35',
                'featured' => 0,
                'top' => 0,
                'digital' => 0,
                'slug' => 'Men-DrTqf',
                'meta_title' => 'Men',
                'meta_description' => 'Men',
                'created_at' => '2022-05-25 15:37:14',
                'updated_at' => '2022-05-25 15:37:14',
            ),
            9 => 
            array (
                'id' => 10,
                'parent_id' => 1,
                'level' => 1,
                'name' => 'Women',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '16',
                'icon' => '16',
                'featured' => 0,
                'top' => 0,
                'digital' => 0,
                'slug' => 'Women-bNjf3',
                'meta_title' => 'Women',
                'meta_description' => 'Women',
                'created_at' => '2022-05-25 15:38:25',
                'updated_at' => '2022-05-25 15:38:25',
            ),
            10 => 
            array (
                'id' => 11,
                'parent_id' => 1,
                'level' => 1,
                'name' => 'Girls',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '51',
                'icon' => '51',
                'featured' => 0,
                'top' => 0,
                'digital' => 0,
                'slug' => 'girls-secau',
                'meta_title' => 'Girls',
                'meta_description' => 'Girls',
                'created_at' => '2022-05-25 21:41:28',
                'updated_at' => '2022-05-25 15:41:28',
            ),
            11 => 
            array (
                'id' => 12,
                'parent_id' => 1,
                'level' => 1,
                'name' => 'Boys',
                'order_level' => 0,
                'commision_rate' => 0.0,
                'banner' => '52',
                'icon' => '52',
                'featured' => 0,
                'top' => 0,
                'digital' => 0,
                'slug' => 'Boys-Hk8bg',
                'meta_title' => 'Boys',
                'meta_description' => 'Boys',
                'created_at' => '2022-05-25 15:41:07',
                'updated_at' => '2022-05-25 15:41:07',
            ),
        ));
        
        
    }
}