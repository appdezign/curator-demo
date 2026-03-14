<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CacheTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('cache')->delete();
        
        \DB::table('cache')->insert(array (
            0 => 
            array (
                'key' => 'laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab',
                'value' => 'i:10;',
                'expiration' => 1773489303,
            ),
            1 => 
            array (
                'key' => 'laravel-cache-356a192b7913b04c54574d18c28d46e6395428ab:timer',
                'value' => 'i:1773489303;',
                'expiration' => 1773489303,
            ),
        ));
        
        
    }
}