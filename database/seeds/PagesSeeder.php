<?php

use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Pages')->insert([
            [
                'name' => 'About',
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id illum nobis quaerat qui sapiente! Accusantium delectus doloribus eaque molestiae perferendis vel voluptatum. Amet blanditiis eius, enim laudantium nisi ullam veniam.</p>'
            ],
            [
                'name' => 'Contact',
                'text' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id illum nobis quaerat qui sapiente! Accusantium delectus doloribus eaque molestiae perferendis vel voluptatum. Amet blanditiis eius, enim laudantium nisi ullam veniam.</p>'
            ]
        ]);
    }
}
