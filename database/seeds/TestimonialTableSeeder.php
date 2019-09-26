<?php

use Illuminate\Database\Seeder;

class TestimonialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\TestimonialHeaderSection::create([
                'title' => "Testimonials",
                'description' => "What are our client say about Us",
                'link_id' => 5,
        ]);

       
        \App\TestimonialBodySection::create([
            'pic_url' => "1555239185_5-4-80x80.jpg",
            'description' => "Excellent Work Done By DreamsTech Team To Develop the Transport System",
            'name' => "Khizar Hayat",
            'role' => "CEO",
            'rating' => 5,
            'link_id' => 5,
        ]);

        \App\TestimonialBodySection::create([
            'pic_url' => "1555239198_3-80x80.jpg",
            'description' => "Now managing our school is very much easy we are runnig schools with limited staff better and faster",
            'name' => "Mudasir Iqbal",
            'role' => "CEO",
            'rating' => 5,
            'link_id' => 5,
        ]);

        \App\TestimonialBodySection::create([
            'pic_url' => "1555239215_5-4-80x80.jpg",
            'description' => "Best software we have from dreamstech softech",
            'name' => "Bilal Basra",
            'role' => "CEO",
            'rating' => 5,
            'link_id' => 5,
        ]);

        \App\TestimonialBodySection::create([
            'pic_url' => "1555239229_3-80x80.jpg",
            'description' => "As an e-commerce site in today’s environment, it is very important to have strong technology infrastructure to stay above your competition. Over the last 4+ year, ygad softech hasn't just been an outsourcing company for us, but an extension to our own team. They have a highly dedicated and stable team of engineers and project managers and are sure to add huge value to any business.",
            'name' => "Mukhtar Sakhawat",
            'role' => "Analytics",
            'rating' => 5,
            'link_id' => 5,
        ]);
            
    }
}
