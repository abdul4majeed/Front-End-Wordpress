<?php

use Illuminate\Database\Seeder;

class ServicesHeaderSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\ServicesHeader::create(
            [
                'title' => "Our Services",
                'description' => "We specialise in solving problems to produce intelligent designs, deliver engaging experiences and build effective solutions.",
            ]
        );
    }
}
