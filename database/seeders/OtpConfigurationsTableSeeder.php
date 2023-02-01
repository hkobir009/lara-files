<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OtpConfigurationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('otp_configurations')->delete();

        \DB::table('otp_configurations')->insert(array (

            1 =>
            array (
                'id' => 2,
                'type' => 'otp_for_order',
                'value' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'type' => 'otp_for_delivery_status',
                'value' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'type' => 'otp_for_paid_status',
                'value' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ),

            7 =>
            array (
                'id' => 8,
                'type' => 'mimsms',
                'value' => '1',
                'created_at' => now(),
                'updated_at' => now(),
            ),

        ));


    }
}
