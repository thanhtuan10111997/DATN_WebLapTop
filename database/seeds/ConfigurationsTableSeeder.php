<?php

use Illuminate\Database\Seeder;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listConf = array(
        	[
        		'product_id' => 1,
        		'screen' => 'LED-backlit IPS LCD, 5.5", Retina HD',
	            'os' => 'iOS 11',
	            'back_camera' => '2 camera 12 MP',
	            'front_camera' => '7 MP',
	            'ram' => '3 GB',
	            'memory' => '64 GB',
	            'battery_capacity' => '2691 mAh'       	
	        ],
	        [
	        	'product_id' => 2,
        		'screen' => 'LED-backlit IPS LCD, 5.5", Retina HD',
	            'os' => 'iOS 11',
	            'back_camera' => '2 camera 12 MP',
	            'front_camera' => '7 MP',
	            'ram' => '3 GB',
	            'memory' => '64 GB',
	            'battery_capacity' => '2691 mAh'       	
	        ],
	        [
	        	'product_id' => 3,
        		'screen' => 'LED-backlit IPS LCD, 5.5", Retina HD',
	            'os' => 'iOS 11',
	            'back_camera' => '2 camera 12 MP',
	            'front_camera' => '7 MP',
	            'ram' => '3 GB',
	            'memory' => '64 GB',
	            'battery_capacity' => '2691 mAh'       	
	        ],
	        [
	        	'product_id' => 4,
        		'screen' => 'LED-backlit IPS LCD, 5.5", Retina HD',
	            'os' => 'iOS 11',
	            'back_camera' => '2 camera 12 MP',
	            'front_camera' => '7 MP',
	            'ram' => '3 GB',
	            'memory' => '64 GB',
	            'battery_capacity' => '2691 mAh'       	
	        ],
	        [
	        	'product_id' => 5,
        		'screen' => 'LED-backlit IPS LCD, 5.5", Retina HD',
	            'os' => 'iOS 11',
	            'back_camera' => '2 camera 12 MP',
	            'front_camera' => '7 MP',
	            'ram' => '3 GB',
	            'memory' => '64 GB',
	            'battery_capacity' => '2691 mAh'       	
	        ],
	        [
	        	'product_id' => 6,
        		'screen' => 'LED-backlit IPS LCD, 5.5", Retina HD',
	            'os' => 'iOS 11',
	            'back_camera' => '2 camera 12 MP',
	            'front_camera' => '7 MP',
	            'ram' => '3 GB',
	            'memory' => '64 GB',
	            'battery_capacity' => '2691 mAh'       	
	        ]
        );
        foreach ($listConf as $key => $value) {
        	DB::table('configurations')->insert($value);
        }
    }
}
