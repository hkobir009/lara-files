<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_taxes')->delete();
        
        \DB::table('product_taxes')->insert(array (
            0 => 
            array (
                'id' => 2,
                'product_id' => 2,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:05:58',
                'updated_at' => '2022-05-25 19:05:58',
            ),
            1 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:10:09',
                'updated_at' => '2022-05-25 19:10:09',
            ),
            2 => 
            array (
                'id' => 4,
                'product_id' => 3,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:10:44',
                'updated_at' => '2022-05-25 19:10:44',
            ),
            3 => 
            array (
                'id' => 9,
                'product_id' => 7,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:13:20',
                'updated_at' => '2022-05-25 19:13:20',
            ),
            4 => 
            array (
                'id' => 10,
                'product_id' => 8,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:13:36',
                'updated_at' => '2022-05-25 19:13:36',
            ),
            5 => 
            array (
                'id' => 11,
                'product_id' => 6,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:15:33',
                'updated_at' => '2022-05-25 19:15:33',
            ),
            6 => 
            array (
                'id' => 13,
                'product_id' => 5,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:19:02',
                'updated_at' => '2022-05-25 19:19:02',
            ),
            7 => 
            array (
                'id' => 14,
                'product_id' => 4,
                'tax_id' => 3,
                'tax' => 2.0,
                'tax_type' => 'percent',
                'created_at' => '2022-05-25 19:21:15',
                'updated_at' => '2022-05-25 19:21:15',
            ),
        ));
        
        
    }
}