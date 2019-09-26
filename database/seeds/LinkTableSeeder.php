<?php

use Illuminate\Database\Seeder;

class LinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Link::create( [
            'link' => "Home",
            'user_id' => 1,
        ]);

        \App\Link::create( [
            'link' => "About",
            'user_id' => 1,
        ]);

        \App\Link::create( [
            'link' => "Services",
            'user_id' => 1,
        ]);

        \App\Link::create( [
            'link' => "Projects",
            'user_id' => 1,
        ]);

        \App\Link::create( [
            'link' => "Testimonials",
            'user_id' => 1,
        ]);

        \App\Link::create( [
            'link' => "Careers",
            'user_id' => 1,
        ]);

        \App\Link::create( [
            'link' => "Get In Touch",
            'user_id' => 1,
        ]);
    }
}
