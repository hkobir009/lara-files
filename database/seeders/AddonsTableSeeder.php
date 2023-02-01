<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddonsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('addons')->delete();
        
        \DB::table('addons')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'OTP',
                'unique_identifier' => 'otp_system',
                'version' => '1.7',
                'activated' => 1,
                'image' => 'otp_system.png',
                'purchase_code' => 'test',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Refund',
                'unique_identifier' => 'refund_request',
                'version' => '1.3',
                'activated' => 1,
                'image' => 'refund_request.png',
                'purchase_code' => 'test',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
        
        
    }
}