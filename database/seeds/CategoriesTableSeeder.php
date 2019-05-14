<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listCategory = array(
        	[
	            'name' => 'LAPTOP DELL',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'LAPTOP HP',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'LAPTOP ASUS',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'LAPTOP LENOVO',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'LAPTOP ACER',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'LAPTOP APPLE',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'LAPTOP SONY',
	            'parent_id' => 0, 
        	],
        ); 
       	foreach ($listCategory as $key => $value) {
       		DB::table('categories')->insert($value);
       	}
    }
}
