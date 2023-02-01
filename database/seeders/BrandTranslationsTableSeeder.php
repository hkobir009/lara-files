<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandTranslationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brand_translations')->delete();
        
        \DB::table('brand_translations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_id' => 1,
                'name' => 'toyota',
                'lang' => 'en',
                'created_at' => '2022-05-25 18:46:14',
                'updated_at' => '2022-05-25 18:46:14',
            ),
            1 => 
            array (
                'id' => 2,
                'brand_id' => 2,
                'name' => 'hunday',
                'lang' => 'en',
                'created_at' => '2022-05-25 18:46:54',
                'updated_at' => '2022-05-25 18:46:54',
            ),
            2 => 
            array (
                'id' => 3,
                'brand_id' => 3,
                'name' => 'sujuki',
                'lang' => 'en',
                'created_at' => '2022-05-25 18:48:03',
                'updated_at' => '2022-05-25 18:48:03',
            ),
            3 => 
            array (
                'id' => 4,
                'brand_id' => 4,
                'name' => 'yamaha',
                'lang' => 'en',
                'created_at' => '2022-05-25 18:48:30',
                'updated_at' => '2022-05-25 18:48:30',
            ),
        ));
        
        
    }
}