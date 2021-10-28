<?php

namespace App\Http\Controllers\Users;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = DB::table('sach')->where('s_trangthai',1)->where('ls_id',$id)->paginate(3);
        $ls = DB::table('loaisach')->where('ls_id',$id)->first();
        // dd($loaisach);
        return view('layout.users.sach.index',compact('data','ls'));
    }



    public function Author($id)
    {

        $data = DB::table('sach')->where('s_trangthai',1)->where('tg_id',$id)->paginate(3);
        $tacgia1= DB::table('tacgia')->where('tg_id',$id)->first();
        // dd($loaisach);
        return view('layout.users.tacgia.author',compact('data','tacgia1'));
    }
    public function nxb($id)
    {

        $data = DB::table('sach')->where('s_trangthai',1)->where('nxb_id',$id)->paginate(3);
        $nxb1= DB::table('nhaxb')->where('nxb_id',$id)->first();
        // dd($loaisach);
        return view('layout.users.nxb.nxb',compact('data','nxb1'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function ajaxsearch(Request $request)
    {
        //
    }




    public function search(Request $request)
    {

        $arrKey = explode(" ",$request->search);
        // dd($arrKey);
        $finding = DB::table('sach');
        foreach ($arrKey as $key => $value) {
            # code...
            $finding->orWhere('s_noidung','like','%'.$value.'%');
            $finding->orWhere('s_ten', 'like', '%'.$value.'%');
        }
        $finding->where('s_trangthai',1);
        $data = $finding->get();
        return view('layout.users.sach.timkiem',compact('data'));
    }





    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
