<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('migrations')->delete();
        
        \DB::table('migrations')->insert(array (
            0 => 
            array (
                'id' => 1,
                'migration' => '0001_01_01_000000_create_users_table',
                'batch' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'migration' => '0001_01_01_000001_create_cache_table',
                'batch' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'migration' => '0001_01_01_000002_create_jobs_table',
                'batch' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'migration' => '2026_03_14_102209_create_curator_table',
                'batch' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'migration' => '2026_03_14_104812_create_pages_table',
                'batch' => 3,
            ),
            5 => 
            array (
                'id' => 6,
                'migration' => '2026_03_14_114812_create_blogs_table',
                'batch' => 4,
            ),
            6 => 
            array (
                'id' => 7,
                'migration' => '2026_03_14_120000_create_object_images_table',
                'batch' => 5,
            ),
        ));
        
        
    }
}