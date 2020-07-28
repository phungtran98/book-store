<?php

namespace App\Http\Controllers\Admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class LoaisachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('loaisach')->get();
        return view('layout.admin.loaisach.index',compact('data'));
    }


    public function form()
    {
        return view('layout.admin.loaisach.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['ls_ma'] = $request->ls_ma;
        $data['ls_ten'] = $request->ls_ten;
        $data['ls_mota'] = $request->ls_mota;
       
        $result = DB::table('loaisach')->insert($data);
        if($request)
        {
            Session::put('mess','Thêm thành công loại sách!');
            return redirect()->route('loaisach.index');
        }
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
    public function formupdate($id)
    {
        $data = DB::table('loaisach')->where('ls_id',$id)->first();

        return view('layout.admin.loaisach.sua',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data['ls_ma'] = $request->ls_ma;
        $data['ls_ten'] = $request->ls_ten;
        $data['ls_mota'] = $request->ls_mota;
       
        $result = DB::table('loaisach')->where('ls_id',$id)->update($data);
        if($result)
        {
            Session::put('mess','Cập nhật thành công loại sách!');
            return redirect()->route('loaisach.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = DB::table('loaisach')->where('ls_id',$id)->delete();
        if($result)
        {
            Session::put('mess','Xóa thành công loại sách!');
            return redirect()->route('loaisach.index');
        }
    }
}
