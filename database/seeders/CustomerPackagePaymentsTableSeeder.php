<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerPackagePaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customer_package_payments')->delete();
        
        
        
    }
}