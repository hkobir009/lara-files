<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerPackagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_packages')->delete();
        
        
        
    }
}