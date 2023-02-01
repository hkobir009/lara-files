<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'toyota',
                'logo' => '69',
                'top' => 1,
                'slug' => 'toyota',
                'meta_title' => 'toyota',
                'meta_description' => 'toyota',
                'created_at' => '2019-03-12 12:05:56',
                'updated_at' => '2022-05-25 18:46:14',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'hunday',
                'logo' => '62',
                'top' => 1,
                'slug' => 'hunday',
                'meta_title' => 'hunday',
                'meta_description' => 'hunday',
                'created_at' => '2019-03-12 12:06:13',
                'updated_at' => '2022-05-25 18:46:54',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'sujuki',
                'logo' => '64',
                'top' => 0,
                'slug' => 'sujuki-ZMV3n',
                'meta_title' => 'sujuki',
                'meta_description' => 'sujuki',
                'created_at' => '2022-05-25 18:48:02',
                'updated_at' => '2022-05-25 18:48:02',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'yamaha',
                'logo' => '63',
                'top' => 0,
                'slug' => 'yamaha-iW2wj',
                'meta_title' => 'yamaha',
                'meta_description' => 'yamaha',
                'created_at' => '2022-05-25 18:48:30',
                'updated_at' => '2022-05-25 18:48:30',
            ),
        ));
        
        
    }
}