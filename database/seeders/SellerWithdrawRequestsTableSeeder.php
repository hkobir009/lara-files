<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellerWithdrawRequestsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('seller_withdraw_requests')->delete();
        
        
        
    }
}