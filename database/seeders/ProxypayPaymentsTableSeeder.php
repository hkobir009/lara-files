<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProxypayPaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('proxypay_payments')->delete();
        
        
        
    }
}