<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listUser = array(
            [
                'name' => 'Admin',
                'email' => 'ngothanhtuanofficial@gmail.com',
                'phone' => '0393083903',
                'level' => 1, 
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
                'address_id' => 37, 
            ],
            [
                'name' => 'Ngô Thanh Tuấn',
                'email' => 'thanhtuanabc.54321@gmail.com',
                'phone' => '0393083903',
                'level' => 1, 
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
                'address_id' => 36, 
            ],
            [
                'name' => 'Ngô Thanh Tuấn',
                'email' => 'ngothanhtuan@gmail.com',
                'phone' => '0393083903',
                'level' => 1, 
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
                'address_id' => 37, 
            ],
            [
                'name' => 'Ngô Thanh Tuấn',
                'email' => 'ngothanhtuan97@gmail.com',
                'phone' => '0886559740',
                'level' => 0, 
                'password' => bcrypt('123456'),
                'remember_token' => str_random(10),
                'address_id' => 35, 
            ],
        );
        foreach ($listUser as $key => $value) {
            DB::table('users')->insert($value);
        }
    }
}
