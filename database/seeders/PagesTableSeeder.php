<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pages')->delete();
        
        \DB::table('pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'About our company',
                'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eget tortor eget arcu blandit tempor a nec libero. Donec sit amet placerat nisl, id hendrerit orci. Morbi sit amet nulla quis leo luctus maximus. Sed blandit lobortis velit, id imperdiet augue tristique sed. Curabitur convallis nisl vel mi mollis, eget volutpat urna pretium. Pellentesque sed facilisis justo, eget tristique turpis. Maecenas massa dui, sodales in est vitae, porta condimentum ante.</p><p style="text-align: justify;">Sed condimentum dignissim libero, sit amet faucibus leo interdum ac. Phasellus pharetra lacus nibh, nec ullamcorper leo tincidunt et. Pellentesque eleifend metus eros, elementum rutrum ligula hendrerit euismod. Aliquam pellentesque leo est, at suscipit sapien vulputate id. Nullam dapibus condimentum nisl, sit amet ultrices lorem molestie gravida. Donec hendrerit luctus ipsum, at tincidunt elit.</p><p style="text-align: justify;">Fusce consequat fermentum consequat. Integer massa tellus, pulvinar non neque ornare, pulvinar facilisis urna. Etiam et libero egestas, sollicitudin sapien sit amet, viverra magna. Vestibulum tincidunt tellus erat, et egestas quam imperdiet id. Praesent dignissim urna non malesuada porta. Nullam gravida massa id purus fermentum bibendum. Integer malesuada sit amet est facilisis dictum.</p>',
                'created_at' => '2026-03-14 10:53:36',
                'updated_at' => '2026-03-14 10:53:36',
            ),
        ));
        
        
    }
}