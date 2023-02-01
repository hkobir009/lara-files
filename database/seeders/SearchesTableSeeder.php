<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SearchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('searches')->delete();
        
        \DB::table('searches')->insert(array (
            0 => 
            array (
                'id' => 2,
                'query' => 'dcs',
                'count' => 1,
                'created_at' => '2020-03-08 06:29:09',
                'updated_at' => '2020-03-08 06:29:09',
            ),
            1 => 
            array (
                'id' => 3,
                'query' => 'das',
                'count' => 3,
                'created_at' => '2020-03-08 06:29:15',
                'updated_at' => '2020-03-08 06:29:50',
            ),
        ));
        
        
    }
}