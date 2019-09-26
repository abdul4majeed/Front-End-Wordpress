<?php

use Illuminate\Database\Seeder;

class SubLinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\SubLink::create([
            'sub_link' => 'WEBSITE DEVELOPMENT',
            'link_id' => 3,
            'user_id' =>  1,
        ]);

        
        \App\SubLink::create([
            'sub_link' => 'CUSTOM SOFTWARE DEVELOPMENT',
            'link_id' => 3,
            'user_id' =>  1,
        ]);


        
        \App\SubLink::create([
            'sub_link' => 'WEB APPLICATION DEVELOPMENT',
            'link_id' => 3,
            'user_id' =>  1,
        ]);


        
        \App\SubLink::create([
            'sub_link' => 'MOBILE APP DEVELOPMENT',
            'link_id' => 3,
            'user_id' =>  1,
        ]);


        
        \App\SubLink::create([
            'sub_link' => 'SEO SERVICES',
            'link_id' => 3,
            'user_id' =>  1,
        ]);


        
        \App\SubLink::create([
            'sub_link' => 'PSD TO HTML',
            'link_id' => 3,
            'user_id' =>  1,
        ]);
    }
}
