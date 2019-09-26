<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ProjectHeaderSection::create([
            'header' => "Our Project",
            'header_body' => "DreamsTech works hard to create practical and business generating solutions for its clients. Our portfolio is the place where we feel extremely proud. Years of work and thriving businesses aided with out technology is what makes us get more innovative in our next projects.",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555241907_marjan-1.jpg",
            'name' => "Marjan Transport Service",
            'tag' => "Website",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242041_vidmotion.png",
            'name' => "Vid Motion",
            'tag' => "WordPress",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242698_kminiature.png",
            'name' => "Kminiature",
            'tag' => "Website",
            'link_id' => "4",
        ]);

        
        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242708_medlift.png",
            'name' => "Med Lift",
            'tag' => "Website",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242717_khpalstore.png",
            'name' => "Khpal Store",
            'tag' => "Website",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242759_goldrmc.png",
            'name' => "Gold Rush",
            'tag' => "Website",
            'link_id' => "4",
        ]);

        
        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242784_gkchiller.png",
            'name' => "Chiller Transport Service",
            'tag' => "Website",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242793_alkarim.png",
            'name' => "Al Karim Clinic",
            'tag' => "Website",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242820_rush.png",
            'name' => "Rush Delivery",
            'tag' => "WordPress",
            'link_id' => "4",
        ]);

      

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242847_home2.jpg",
            'name' => "Terrace Tiles",
            'tag' => "Wordpress",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242866_home.jpg",
            'name' => "Female Driving School",
            'tag' => "Wordpress",
            'link_id' => "4",
        ]);

        \App\ProjectHeaderProjectSection::create([
            'url' => "1555242878_1.jpg",
            'name' => "VIP Refrigerated Van and Truck Transport",
            'tag' => "Wordpress",
            'link_id' => "4",
        ]);



    }
}




