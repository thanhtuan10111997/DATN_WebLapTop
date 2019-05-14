<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listSlide = array(
        	[
	            'name' => str_random(4),
	            'image_link' => 'banner1.png', 
        	],
        	[
	            'name' => str_random(4),
	            'image_link' => 'banner2.png', 
        	],
        	[
	            'name' => str_random(4),
	            'image_link' => 'banner3.png', 
        	]
        ); 
       	foreach ($listSlide as $key => $value) {
       		DB::table('slides')->insert($value);
       	}
    }
}
