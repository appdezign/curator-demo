<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ObjectImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('object_images')->delete();
        
        \DB::table('object_images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 10,
                'order' => 1,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            1 => 
            array (
                'id' => 2,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 11,
                'order' => 2,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            2 => 
            array (
                'id' => 3,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 12,
                'order' => 3,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            3 => 
            array (
                'id' => 4,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 13,
                'order' => 4,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            4 => 
            array (
                'id' => 5,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 14,
                'order' => 5,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            5 => 
            array (
                'id' => 6,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 15,
                'order' => 6,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            6 => 
            array (
                'id' => 7,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 16,
                'order' => 7,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            7 => 
            array (
                'id' => 8,
                'mediable_type' => 'App\\Models\\Blog',
                'mediable_id' => 1,
                'media_id' => 17,
                'order' => 8,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:51:56',
                'updated_at' => '2026-03-14 11:51:56',
            ),
            8 => 
            array (
                'id' => 9,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 19,
                'order' => 1,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            9 => 
            array (
                'id' => 10,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 20,
                'order' => 2,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            10 => 
            array (
                'id' => 11,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 21,
                'order' => 3,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            11 => 
            array (
                'id' => 12,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 22,
                'order' => 4,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            12 => 
            array (
                'id' => 13,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 23,
                'order' => 5,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            13 => 
            array (
                'id' => 14,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 24,
                'order' => 6,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            14 => 
            array (
                'id' => 15,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 25,
                'order' => 7,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            15 => 
            array (
                'id' => 16,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 26,
                'order' => 8,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
            16 => 
            array (
                'id' => 17,
                'mediable_type' => 'App\\Models\\Page',
                'mediable_id' => 1,
                'media_id' => 27,
                'order' => 9,
                'type' => 'gallery',
                'created_at' => '2026-03-14 11:55:13',
                'updated_at' => '2026-03-14 11:55:13',
            ),
        ));
        
        
    }
}