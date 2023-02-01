<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CombinedOrdersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('combined_orders')->delete();
        
        
        
    }
}