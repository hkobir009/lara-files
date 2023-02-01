<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('languages')->delete();
        
        \DB::table('languages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'English',
                'code' => 'en',
                'app_lang_code' => 'en',
                'rtl' => 0,
                'status' => 1,
                'created_at' => '2019-01-20 18:13:20',
                'updated_at' => '2019-01-20 18:13:20',
            ),
            1 => 
            array (
                'id' => 3,
                'name' => 'Bangla',
                'code' => 'bd',
                'app_lang_code' => 'bn',
                'rtl' => 0,
                'status' => 1,
                'created_at' => '2019-02-17 12:35:37',
                'updated_at' => '2019-02-18 12:49:51',
            ),
            2 => 
            array (
                'id' => 4,
                'name' => 'Arabic',
                'code' => 'sa',
                'app_lang_code' => 'ar',
                'rtl' => 1,
                'status' => 1,
                'created_at' => '2019-04-29 00:34:12',
                'updated_at' => '2019-04-29 00:34:12',
            ),
        ));
        
        
    }
}