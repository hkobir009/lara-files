<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Manager',
                'permissions' => '["1","2","4"]',
                'created_at' => '2018-10-10 10:39:47',
                'updated_at' => '2018-10-10 10:51:37',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Accountant',
                'permissions' => '["2","3"]',
                'created_at' => '2018-10-10 10:52:09',
                'updated_at' => '2018-10-10 10:52:09',
            ),
        ));
        
        
    }
}