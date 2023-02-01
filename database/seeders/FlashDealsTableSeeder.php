<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlashDealsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flash_deals')->delete();
        
        \DB::table('flash_deals')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Gift vaucher',
                'start_date' => 1658880000,
                'end_date' => 1659743940,
                'status' => 1,
                'featured' => 0,
                'background_color' => '#DE1F26',
                'text_color' => 'white',
                'banner' => '109',
                'slug' => 'gift-vaucher-h3xlt',
                'created_at' => '2022-07-27 05:44:23',
                'updated_at' => '2022-08-06 15:40:03',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Wilma Howard',
                'start_date' => 1659744000,
                'end_date' => 1661039940,
                'status' => 1,
                'featured' => 0,
                'background_color' => 'Tenetur voluptate si',
                'text_color' => 'dark',
                'banner' => NULL,
                'slug' => 'wilma-howard-84tv3',
                'created_at' => '2022-08-06 15:38:36',
                'updated_at' => '2022-08-06 15:39:58',
            ),
        ));
        
        
    }
}