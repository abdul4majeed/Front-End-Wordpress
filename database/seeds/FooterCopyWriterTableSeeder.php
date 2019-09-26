<?php

use Illuminate\Database\Seeder;

class FooterCopyWriterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\FooterCopyWrite::create([
            'footer_copyright_string' => 'Copyrights &copy; 2019',
            'footer_site_name_string' => 'DreamsTech',
            'footer_designer_title' => 'Designed by',
            'footer_developer_name' => 'DreamsTech',
            'footer_url' => 'http://www.dreamstech.net',
        ]);

        \App\FooterContect::create([
            'description' => 'With more than ten years of knowledge and expertise we design and code clean websites and apps, we build brands!',
            'address' => "<br><br>  Sadiq Arcade Office #1,<br> 3rd Floor, Link Road,<br>Model Town, Lahore, Pakistan",
            'fb_link' => 'http://www.facebook.com',
            'twitter_link' => 'http://twitter.com',
            'instagram_link' => 'https://www.instagram.com/',
            'pinterest_link' => 'https://www.pinterest.com/',
            'gplus_link' => 'https://plus.google.com/',
            'watsapp_number' => "00923348826421",
            'watsapp_text' => "Reached Us",
        ]);
    }
}
