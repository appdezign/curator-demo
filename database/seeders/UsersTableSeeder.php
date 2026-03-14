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
                'id' => 1,
                'name' => 'superadmin',
                'email' => 'info@example.com',
                'email_verified_at' => NULL,
                'password' => '',
                'remember_token' => NULL,
                'created_at' => '2026-03-14 10:03:15',
                'updated_at' => '2026-03-14 10:03:15',
            ),
        ));


    }
}