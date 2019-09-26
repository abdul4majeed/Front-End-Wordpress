<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(
             [UserTableSeeder::class, 
              LinkTableSeeder::class,
              SubLinkTableSeeder::class,
              HomeSectionTableSeeder::class,
              LogoImageTableSeeder::class,
              AboutUsTableSeeder::class,
              ProjectTableSeeder::class,
              TestimonialTableSeeder::class,
              GetInTouchTableSeeder::class,
              FooterCopyWriterTableSeeder::class,
              TeamTableSeeder::class,
              SubLinkContentTableSeeder::class,
              ServicesHeaderSeederTable::class,
              CareerTableSeeder::class,
             ]);
    }
}
