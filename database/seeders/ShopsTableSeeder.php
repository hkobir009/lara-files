<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('shops')->delete();
        
        \DB::table('shops')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'name' => 'Demo Seller Shop',
                'logo' => NULL,
                'sliders' => NULL,
                'phone' => NULL,
                'address' => 'House : Demo, Road : Demo, Section : Demo',
                'rating' => 0.0,
                'num_of_reviews' => 0,
                'num_of_sale' => 0,
                'seller_package_id' => NULL,
                'product_upload_limit' => 0,
                'package_invalid_at' => NULL,
                'verification_status' => 1,
                'verification_info' => NULL,
                'cash_on_delivery_status' => 0,
                'admin_to_pay' => 0.0,
                'facebook' => 'www.facebook.com',
                'instagram' => NULL,
                'google' => 'www.google.com',
                'twitter' => 'www.twitter.com',
                'youtube' => 'www.youtube.com',
                'slug' => 'Demo-Seller-Shop-1',
                'meta_title' => 'Demo Seller Shop Title',
                'meta_description' => 'Demo description',
                'pick_up_point_id' => NULL,
                'shipping_cost' => 0.0,
                'delivery_pickup_latitude' => NULL,
                'delivery_pickup_longitude' => NULL,
                'bank_name' => NULL,
                'bank_acc_name' => NULL,
                'bank_acc_no' => NULL,
                'bank_routing_no' => NULL,
                'bank_payment_status' => 0,
                'created_at' => '2018-11-27 16:23:13',
                'updated_at' => '2022-05-25 18:51:27',
            ),
        ));
        
        
    }
}