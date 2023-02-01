<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TicketRepliesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ticket_replies')->delete();
        
        
        
    }
}