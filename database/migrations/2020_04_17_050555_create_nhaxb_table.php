<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhaxbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhaxb', function (Blueprint $table) {
            $table->bigIncrements('nxb_id');
            $table->string('nxb_ten');
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
        // Schema::dropIfExists('nhaxb');
    }
}
