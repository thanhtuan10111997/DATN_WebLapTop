<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listImage = array(
        	[
        		'product_id' => 1,
        		'image_link' => 'acer_1.png'
        	],
        	[
        		'product_id' => 1,
        		'image_link' => 'acer_2.png'
        	],
        	[
        		'product_id' => 1,
        		'image_link' => 'acer_3.png'
        	],
        	[
        		'product_id' => 3,
        		'image_link' => 'acer_4.png'
        	]
        );
        foreach ($listImage as $key => $value) {
       		DB::table('images')->insert($value);
       	}
    }
}
