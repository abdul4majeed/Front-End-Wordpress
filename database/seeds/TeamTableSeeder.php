<?php

use Illuminate\Database\Seeder;

class TeamTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TeamHeader::create([
            'title' => 'Meet Our Team',
            'description' => 'Our team is our greatest asset. Many of us have worked with each other over decades and across corporate boundaries resulting in a cohesive and valuable partnership',
        ]);


        \App\Team::create([
            'image_path' => '1555264338_anees-400x514.png',
            'name' => 'Engr. Anees ur Rahman',
            'role' => 'Software Engineer',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);

        \App\Team::create([
            'image_path' => '1555264348_123-1-400x514.png',
            'name' => 'M. Humayun',
            'role' => 'Finance Manager',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);

        \App\Team::create([
            'image_path' => '1555264399_mazrrr_n-1-400x519.png',
            'name' => 'Engr. Mazhar Islam',
            'role' => 'Business Development Officer',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);

        \App\Team::create([
            'image_path' => '1555264281_Mati-ur-Rehman-1-400x514.png',
            'name' => 'Engr. Mati ur Rahman',
            'role' => 'System Engineer',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);

        \App\Team::create([
            'image_path' => '1555264409_Faran-400x483.jpeg',
            'name' => 'Muhammad Faran',
            'role' => 'Back end/ Front end Developer',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);

        \App\Team::create([
            'image_path' => '1555264464_ali-a-400x494.jpg',
            'name' => 'Ali Zaib',
            'role' => 'Laravel Developer',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);

        \App\Team::create([
            'image_path' => '1555264485_bilal-400x514.png',
            'name' => 'M. Bilal',
            'role' => 'Software Developer',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);

        \App\Team::create([
            'image_path' => '1555264476_doneee.jpg',
            'name' => 'Syed Muhammad Dawood',
            'role' => 'Digital Marketing Expert/ SEO, SMM, PPC',
            'fb' => 'http://www.facebook.com',
            'twitter' => 'http://www.twitter.com',
            'instagram' => 'http://www.instagram.com',
            'pinterest' => 'http://www.pinterest.com',
            'googleplus' => 'https://plus.google.com/',
        ]);
    }
}
