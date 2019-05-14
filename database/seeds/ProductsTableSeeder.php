<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$descript = '<p>Mô tả</p>';
        $listProduct = array(
        	[
        		'category_id' => 2,
        		'name' => 'Acer',
        		'descript' => $descript,
                'quantities' => 50,
        		'price' => 23990000,
        		'discount' => 1350000,
        		'avatar' => 'acer_1.png',
        	],
        	[
        		'category_id' => 3,
        		'name' => 'Acer 2',
        		'descript' => $descript,
                'quantities' => 50,
        		'price' => 2212000,
        		'discount' => 110000,
        		'avatar' => 'acer_2.png',
        	],
        	[
        		'category_id' => 3,
        		'name' => 'Acer 3',
        		'descript' => $descript,
                'quantities' => 50,
        		'price' => 8990000,
        		'discount' => 1350000,
        		'avatar' => 'acer_3.png',
        	],
        	[
        		'category_id' => 4,
        		'name' => 'Acer 4',
        		'descript' => $descript,
                'quantities' => 50,
        		'price' => 6299000,
        		'discount' => 1000000,
        		'avatar' => 'acer_4.png',
        	],
        	[
        		'category_id' => 5,
        		'name' => 'Acer 5',
        		'descript' => $descript,
                'quantities' => 50,
        		'price' => 17990000,
        		'discount' => 1350000,
        		'avatar' => 'acer_5.png',
        	],
        	[
        		'category_id' => 6,
        		'name' => 'Acer 6',
        		'descript' => $descript,
                'quantities' => 50,
        		'price' => 11990000,
        		'discount' => 1350000,
        		'avatar' => 'acer_6.png',
        	]
        );
        foreach ($listProduct as $key => $value) {
       		DB::table('products')->insert($value);
       	}
    }
}
