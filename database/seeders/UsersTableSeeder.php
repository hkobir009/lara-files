<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 3,
                'referred_by' => NULL,
                'provider_id' => NULL,
                'user_type' => 'seller',
                'name' => 'Mr. Seller',
                'email' => 'seller@example.com',
                'email_verified_at' => '2018-12-12 00:00:00',
                'verification_code' => NULL,
                'new_email_verificiation_code' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '1zoU4eQxnOC5yxRWLsTzMNBPpJuOvTk4g3GMUVYIrbGijiXHOfIlFq0wHrIn',
                'device_token' => NULL,
                'avatar' => 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50',
                'avatar_original' => NULL,
                'address' => 'Demo address',
                'country' => 'US',
                'state' => NULL,
                'city' => 'Demo city',
                'postal_code' => '1234',
                'phone' => NULL,
                'balance' => 0.0,
                'banned' => 0,
                'referral_code' => '3dLUoHsR1l',
                'customer_package_id' => NULL,
                'remaining_uploads' => NULL,
                'created_at' => '2018-10-07 10:42:57',
                'updated_at' => '2020-03-05 07:33:22',
            ),
            1 => 
            array (
                'id' => 8,
                'referred_by' => NULL,
                'provider_id' => NULL,
                'user_type' => 'customer',
                'name' => 'Mr. Customer',
                'email' => 'customer@example.com',
                'email_verified_at' => '2018-12-12 00:00:00',
                'verification_code' => NULL,
                'new_email_verificiation_code' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => '9ndcz5o7xgnuxctJIbvUQcP41QKmgnWCc7JDSnWdHOvipOP2AijpamCNafEe',
                'device_token' => NULL,
                'avatar' => 'https://lh3.googleusercontent.com/-7OnRtLyua5Q/AAAAAAAAAAI/AAAAAAAADRk/VqWKMl4f8CI/photo.jpg?sz=50',
                'avatar_original' => NULL,
                'address' => 'Demo address',
                'country' => 'US',
                'state' => NULL,
                'city' => 'Demo city',
                'postal_code' => '1234',
                'phone' => NULL,
                'balance' => 0.0,
                'banned' => 0,
                'referral_code' => '8zJTyXTlTT',
                'customer_package_id' => NULL,
                'remaining_uploads' => NULL,
                'created_at' => '2018-10-07 10:42:57',
                'updated_at' => '2020-03-03 10:26:11',
            ),
            2 => 
            array (
                'id' => 9,
                'referred_by' => NULL,
                'provider_id' => NULL,
                'user_type' => 'admin',
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => '2022-05-19 19:05:22',
                'verification_code' => NULL,
                'new_email_verificiation_code' => NULL,
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'remember_token' => 'f3hcJUxfgTr6a9GBxz74vfdMqbxd8t6Dsi4vo2DhIkcxxFMdOwTexbj6SCDL',
                'device_token' => NULL,
                'avatar' => NULL,
                'avatar_original' => NULL,
                'address' => NULL,
                'country' => NULL,
                'state' => NULL,
                'city' => NULL,
                'postal_code' => NULL,
                'phone' => NULL,
                'balance' => 0.0,
                'banned' => 0,
                'referral_code' => NULL,
                'customer_package_id' => NULL,
                'remaining_uploads' => 0,
                'created_at' => '2022-05-19 19:13:22',
                'updated_at' => '2022-05-19 19:18:00',
            ),
        ));
        
        
    }
}