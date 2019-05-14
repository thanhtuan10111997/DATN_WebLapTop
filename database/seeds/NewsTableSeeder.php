<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $content = 'Nội dung tin tức';
        $listNews = array(
            [
                'title' => 'Tiêu đề tin tức 1',
                'content' => $content, 
                'avatar' => '1.png'
            ],
            [
                'title' => 'Tiêu đề tin tức 2',
                'content' => $content, 
                'avatar' => '2.png'
            ],
            [
                'title' => 'Tiêu đề tin tức 3',
                'content' => $content, 
                'avatar' => '3.png'
            ]
        ); 
        foreach ($listNews as $key => $value) {
            DB::table('news')->insert($value);
        }
    }
}
