<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FlashDealTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('flash_deal_translations')->delete();
        
        \DB::table('flash_deal_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'flash_deal_id' => 1,
                'title' => 'Gift vaucher',
                'lang' => 'en',
                'created_at' => '2022-07-27 05:44:23',
                'updated_at' => '2022-07-27 05:44:23',
            ),
            1 => 
            array (
                'id' => 2,
                'flash_deal_id' => 2,
                'title' => 'Wilma Howard',
                'lang' => 'en',
                'created_at' => '2022-08-06 15:38:36',
                'updated_at' => '2022-08-06 15:38:36',
            ),
        ));
        
        
    }
}