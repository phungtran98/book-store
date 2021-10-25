<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //loại sách trền lên menu
        // $loaisach = DB::table('loaisach')->get();
        // view()->share('loaisach',$loaisach);

        // //tác giả
        // $tacgia = DB::table('tacgia')->get();
        // view()->share('tacgia', $tacgia);

        // //nhà xuất bản
        // $nxb = DB::table('nhaxb')->get();
        // view()->share('nxb', $nxb);

    }
}
