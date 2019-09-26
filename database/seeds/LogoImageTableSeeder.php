<?php

use Illuminate\Database\Seeder;

class LogoImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LogoImage::create( [
            'image_logo_path' => "1554968668_logo.png",
            'image_title_name' => "DreamsTech",
        ]);
    }
}
