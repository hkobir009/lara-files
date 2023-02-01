<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TaxesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('taxes')->delete();
        
        \DB::table('taxes')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'Tax',
                'tax_status' => 1,
                'created_at' => '2021-03-07 17:45:33',
                'updated_at' => '2021-03-07 17:45:33',
            ),
        ));
        
        
    }
}