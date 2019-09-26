<?php

use Illuminate\Database\Seeder;

class GetInTouchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\GetInTouchMapSection::create([
                'map_iframe' => '<iframe width="720" height="450" src="https://maps.google.com/maps?width=720&amp;height=450&amp;hl=en&amp;q=DreamsTech%20Model%20Town%20Pakistan%20Lahore+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=19&amp;iwloc=A&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Map a route</a></iframe>',
            ]);
    }
}
