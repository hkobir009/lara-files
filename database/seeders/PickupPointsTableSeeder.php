<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PickupPointsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pickup_points')->delete();
        
        
        
    }
}