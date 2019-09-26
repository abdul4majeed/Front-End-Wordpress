<?php

use Illuminate\Database\Seeder;

class HomeSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\HomeSection::create( [
            'title' => "Make Business<br>With Experienced<br> <span class=\"theme-color\">Partern</span>",
            'description' => "Delivered more then 200 projects<br>With 100% Success Rate",
            'button_text' => "Touch With Us",
            'link_id' => "1",

          
        ]);

        \App\HomeSection::create( [
            'title' => "We Will<br>Stand With<br> <span class=\"theme-color\">You</span>",
            'description' => "Faster, smarter and innovative <br> in no time with quality apporach",
            'button_text' => "Get Hired",
            'link_id' => "1",
        ]);
    }
}
