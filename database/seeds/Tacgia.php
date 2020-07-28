<?php

use Illuminate\Database\Seeder;

class Tacgia extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tacgia')->insert([
            [
                'tg_ten'=>'NGUYỄN NHẬT ÁNH'
            ],
            [
                'tg_ten'=>'FUJIKO F FUJIO'
            ],
            [
                'tg_ten'=>'TRANG HẠ'
            ],
            [
                'tg_ten'=>'NGUYỄN PHONG VIỆT'
            ],
            [
                'tg_ten'=>'ANH KHANG'
            ],
            [
                'tg_ten'=>'NGUYỄN NGỌC SƠN (SƠN PARIS)'
            ],
            [
                'tg_ten'=>'ERNEST MILLER HEMINGWAY'
            ],
            [
                'tg_ten'=>'FRANZ KAFKA'
            ],
            [
                'tg_ten'=>'GABRIEL GARCIA MARQUEZ'
            ],
            [
                'tg_ten'=>'HARPER LEE'
            ],
            
        ]);
    }
}
