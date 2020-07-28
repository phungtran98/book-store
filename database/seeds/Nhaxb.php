<?php

use Illuminate\Database\Seeder;

class Nhaxb extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nhaxb')->insert([
            [
                'nxb_ten'=>'Nhà xuất bản Chính trị Quốc gia'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Tư pháp'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Hồng Đức'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Quân đội'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Công an nhân dân'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Kim Đồng'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Lao động'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Tôn giáo'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Hà Nội'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Lý luận chính trị'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Hải phòng'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Thanh Hoá'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Trẻ'
            ],
            [
                'nxb_ten'=>'Nhà xuất bản Đồng Nai'
            ],
        ]);
    }
}
