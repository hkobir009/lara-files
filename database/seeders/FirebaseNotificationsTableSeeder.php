<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FirebaseNotificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('firebase_notifications')->delete();
        
        
        
    }
}