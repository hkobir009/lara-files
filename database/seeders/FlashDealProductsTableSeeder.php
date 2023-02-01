<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlashDealProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flash_deal_products')->delete();
        
        \DB::table('flash_deal_products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'flash_deal_id' => 1,
                'product_id' => 8,
                'discount' => 0.0,
                'discount_type' => NULL,
                'created_at' => '2022-07-27 05:44:23',
                'updated_at' => '2022-07-27 05:44:23',
            ),
            1 => 
            array (
                'id' => 2,
                'flash_deal_id' => 1,
                'product_id' => 7,
                'discount' => 0.0,
                'discount_type' => NULL,
                'created_at' => '2022-07-27 05:44:23',
                'updated_at' => '2022-07-27 05:44:23',
            ),
            2 => 
            array (
                'id' => 3,
                'flash_deal_id' => 1,
                'product_id' => 4,
                'discount' => 0.0,
                'discount_type' => NULL,
                'created_at' => '2022-07-27 05:44:23',
                'updated_at' => '2022-07-27 05:44:23',
            ),
            3 => 
            array (
                'id' => 4,
                'flash_deal_id' => 1,
                'product_id' => 1,
                'discount' => 0.0,
                'discount_type' => NULL,
                'created_at' => '2022-07-27 05:44:23',
                'updated_at' => '2022-07-27 05:44:23',
            ),
            4 => 
            array (
                'id' => 5,
                'flash_deal_id' => 2,
                'product_id' => 8,
                'discount' => 0.0,
                'discount_type' => NULL,
                'created_at' => '2022-08-06 15:38:36',
                'updated_at' => '2022-08-06 15:38:36',
            ),
            5 => 
            array (
                'id' => 6,
                'flash_deal_id' => 2,
                'product_id' => 5,
                'discount' => 0.0,
                'discount_type' => NULL,
                'created_at' => '2022-08-06 15:38:36',
                'updated_at' => '2022-08-06 15:38:36',
            ),
            6 => 
            array (
                'id' => 7,
                'flash_deal_id' => 2,
                'product_id' => 4,
                'discount' => 0.0,
                'discount_type' => NULL,
                'created_at' => '2022-08-06 15:38:36',
                'updated_at' => '2022-08-06 15:38:36',
            ),
        ));
        
        
    }
}