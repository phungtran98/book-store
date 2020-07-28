<?php

use Illuminate\Database\Seeder;

class Theloai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('loaisach')->insert([
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'BÀ MẸ VÀ EM BÉ',
            'ls_mota'=>str_random(32)
        ],
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'DINH DƯỠNG - SỨC KHỎE',
            'ls_mota'=>str_random(32)
        ],
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'CHÍNH TRỊ - PHÁP LÝ',
            'ls_mota'=>str_random(32)
        ],
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'CÔNG NGHỆ THÔNG TIN',
            'ls_mota'=>str_random(32)
        ],
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'Y HỌC',
            'ls_mota'=>str_random(32)
        ],
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'KINH TẾ',
            'ls_mota'=>str_random(32)
        ],
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'THIẾU NHI',
            'ls_mota'=>str_random(32)
        ],
        [
            'ls_ma'=>str_random(4),
            'ls_ten'=>'THIẾU NHI',
            'ls_mota'=>str_random(32)
        ],
     
    
    
        ]);
    }
}
