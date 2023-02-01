<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sellers')->delete();
        
        \DB::table('sellers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 3,
                'rating' => 0.0,
                'num_of_reviews' => 0,
                'num_of_sale' => 0,
                'verification_status' => 1,
                'verification_info' => '[{"type":"text","label":"Name","value":"Mr. Seller"},{"type":"select","label":"Marital Status","value":"Married"},{"type":"multi_select","label":"Company","value":"[\\"Company\\"]"},{"type":"select","label":"Gender","value":"Male"},{"type":"file","label":"Image","value":"uploads\\/verification_form\\/CRWqFifcbKqibNzllBhEyUSkV6m1viknGXMEhtiW.png"}]',
                'cash_on_delivery_status' => 1,
                'admin_to_pay' => 78.4,
                'bank_name' => NULL,
                'bank_acc_name' => NULL,
                'bank_acc_no' => NULL,
                'bank_routing_no' => NULL,
                'bank_payment_status' => 0,
                'created_at' => '2018-10-07 10:42:57',
                'updated_at' => '2020-01-26 10:21:11',
            ),
        ));
        
        
    }
}