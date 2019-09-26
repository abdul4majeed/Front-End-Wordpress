<?php

use Illuminate\Database\Seeder;
use App\CareerHeader;

class CareerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\CareerHeader::create([
            'title'=>'CAREER',
            'description' => 'It does not matter how slowly you go as long as you do not stop',
        ]);
    }
}
