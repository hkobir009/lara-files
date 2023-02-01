<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SmsTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('sms_templates')->delete();

        \DB::table('sms_templates')->insert(array (
            0 =>
            array (
                'id' => 1,
                'identifier' => 'phone_number_verification',
                'sms_body' => '[[code]] is your verification code for [[site_name]].',
                'template_id' => NULL,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 =>
            array (
                'id' => 2,
                'identifier' => 'password_reset',
                'sms_body' => 'Your password reset code is [[code]].',
                'template_id' => NULL,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            2 =>
            array (
                'id' => 3,
                'identifier' => 'order_placement',
                'sms_body' => 'Your order has been placed and Order Code is [[order_code]]',
                'template_id' => NULL,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            3 =>
            array (
                'id' => 4,
                'identifier' => 'delivery_status_change',
                'sms_body' => 'Your delivery status has been updated to [[delivery_status]]  for Order code : [[order_code]]',
                'template_id' => NULL,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            4 =>
            array (
                'id' => 5,
                'identifier' => 'payment_status_change',
                'sms_body' => 'Your payment status has been updated to [[payment_status]] for Order code : [[order_code]]',
                'template_id' => NULL,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
            5 =>
            array (
                'id' => 6,
                'identifier' => 'assign_delivery_boy',
                'sms_body' => 'You are assigned to deliver an order. Order code : [[order_code]]',
                'template_id' => NULL,
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));


    }
}
