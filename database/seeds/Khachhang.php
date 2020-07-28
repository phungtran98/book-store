<?php

use Illuminate\Database\Seeder;

class Khachhang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khachhang')->insert([
            [
                'kh_ten'=>"Trần Thanh Phụng",
                'kh_email'=>str_random(4).'@gmail.com',
                'kh_sdt'=>rand(1000000000, 9999999999),
                'kh_gtinh'=>1,
                'kh_diachi'=>str_random(10),
                'kh_avatar'=>'',
            ],
            [
                'kh_ten'=>"Lâm Ngọc Mỹ",
                'kh_email'=>str_random(4).'@gmail.com',
                'kh_sdt'=>rand(1000000000, 9999999999),
                'kh_gtinh'=>0,
                'kh_diachi'=>str_random(10),
                'kh_avatar'=>'',
            ],
            [
                'kh_ten'=>"Trần Quốc Cường",
                'kh_email'=>str_random(4).'@gmail.com',
                'kh_sdt'=>rand(1000000000, 9999999999),
                'kh_gtinh'=>1,
                'kh_diachi'=>str_random(10),
                'kh_avatar'=>'',
            ],
            [
                'kh_ten'=>"Trần Trung Khánh",
                'kh_email'=>str_random(4).'@gmail.com',
                'kh_sdt'=>rand(1000000000, 9999999999),
                'kh_gtinh'=>1,
                'kh_diachi'=>str_random(10),
                'kh_avatar'=>'',
            ],
            [
                'kh_ten'=>"Phườn Vũ",
                'kh_email'=>str_random(4).'@gmail.com',
                'kh_sdt'=>rand(1000000000, 9999999999),
                'kh_gtinh'=>1,
                'kh_diachi'=>str_random(10),
                'kh_avatar'=>'',
            ],

        ]);
    }
}
