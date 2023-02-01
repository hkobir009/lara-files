<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductStocksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_stocks')->delete();
        
        \DB::table('product_stocks')->insert(array (
            0 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 1520.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:05:58',
                'updated_at' => '2022-05-25 19:05:58',
            ),
            1 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 1520.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:10:09',
                'updated_at' => '2022-05-25 19:10:09',
            ),
            2 => 
            array (
                'id' => 4,
                'product_id' => 3,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 1520.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:10:44',
                'updated_at' => '2022-05-25 19:10:44',
            ),
            3 => 
            array (
                'id' => 9,
                'product_id' => 7,
                'variant' => 'Aqua',
                'sku' => 'Aqua',
                'price' => 1520.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:13:20',
                'updated_at' => '2022-05-25 19:13:20',
            ),
            4 => 
            array (
                'id' => 10,
                'product_id' => 7,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 1520.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:13:20',
                'updated_at' => '2022-05-25 19:13:20',
            ),
            5 => 
            array (
                'id' => 11,
                'product_id' => 8,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 1520.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:13:36',
                'updated_at' => '2022-05-25 19:13:36',
            ),
            6 => 
            array (
                'id' => 12,
                'product_id' => 6,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 500.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:15:33',
                'updated_at' => '2022-05-25 19:15:33',
            ),
            7 => 
            array (
                'id' => 14,
                'product_id' => 5,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 5000.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:19:02',
                'updated_at' => '2022-05-25 19:19:02',
            ),
            8 => 
            array (
                'id' => 15,
                'product_id' => 4,
                'variant' => 'Beige',
                'sku' => NULL,
                'price' => 5004.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:21:15',
                'updated_at' => '2022-05-25 19:21:15',
            ),
            9 => 
            array (
                'id' => 16,
                'product_id' => 4,
                'variant' => 'Crimson',
                'sku' => 'Crimson',
                'price' => 5008.0,
                'qty' => 10,
                'image' => NULL,
                'created_at' => '2022-05-25 19:21:15',
                'updated_at' => '2022-05-25 19:21:15',
            ),
        ));
        
        
    }
}