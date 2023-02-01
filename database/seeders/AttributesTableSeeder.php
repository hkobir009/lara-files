<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('attributes')->delete();
        
        \DB::table('attributes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Size',
                'created_at' => '2020-02-24 11:55:07',
                'updated_at' => '2020-02-24 11:55:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Fabric',
                'created_at' => '2020-02-24 11:55:13',
                'updated_at' => '2020-02-24 11:55:13',
            ),
        ));
        
        
    }
}