<?php

use Illuminate\Database\Seeder;

class Taikhoan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taikhoan')->insert([
            [
                'username'=>'admin',
                'password'=>bcrypt('123456'),
                'kh_id'=>1
            ],
            [
                'username'=>'my',
                'password'=>bcrypt('123456'),
                'kh_id'=>2
            ],
            [
                'username'=>'cuong',
                'password'=>bcrypt('123456'),
                'kh_id'=>3
            ],
            [
                'username'=>'khanh',
                'password'=>bcrypt('123456'),
                'kh_id'=>4
            ],
            [
                'username'=>'vu',
                'password'=>bcrypt('123456'),
                'kh_id'=>5
            ],
        ]);
    }
}
