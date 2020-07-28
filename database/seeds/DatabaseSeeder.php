<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(Khachhang::class);
        $this->call(Taikhoan::class);
        $this->call(Nhaxb::class);
        $this->call(Theloai::class);
        $this->call(Tacgia::class);
    }
}
