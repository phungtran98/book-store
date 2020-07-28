<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCtgiohangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ctgiohang', function (Blueprint $table) {
            $table->bigInteger('gh_id')->unsigned() ;
            $table->bigInteger('s_id')->unsigned();
            $table->integer('ctgh_tongtien');

            $table->foreign('gh_id')->references('gh_id')->on('giohang');
            $table->foreign('s_id')->references('s_id')->on('sach');

            //tao khoa chinh
            $table->primary(['gh_id','s_id']);



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
        // Schema::dropIfExists('ctgiohang');
    }
}
