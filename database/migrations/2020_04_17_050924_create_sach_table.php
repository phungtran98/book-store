<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sach', function (Blueprint $table) {
            $table->bigIncrements('s_id');
            $table->string('s_ten');
            $table->integer('s_gia');
            $table->integer('s_danhgia')->nullabe();
            $table->string('s_tieude')->nullable();;
            $table->string('s_hinhanh');
            $table->text('s_mota');
            $table->integer('s_trangthai');
            $table->string('s_tinhtrang')->nullable();
            $table->bigInteger('ls_id')->unsigned();
            $table->bigInteger('tg_id')->unsigned();
            $table->bigInteger('nxb_id')->unsigned();
         


            $table->foreign('ls_id')->references('ls_id')->on('loaisach');
            $table->foreign('nxb_id')->references('nxb_id')->on('nhaxb');
            $table->foreign('tg_id')->references('tg_id')->on('tacgia');



            //log time
            $table->timestamp('created_at')
            ->default(DB::raw('CURRENT_TIMESTAMP'))
            ->comment('ngày tạo');

            $table->timestamp('updated_at')
            ->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'))
            ->comment('ngày cập nhật');

            $table->timestamp('deleted_at')
            ->nullable()
            ->comment('ngày xóa tạm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('sach');
    }
}
