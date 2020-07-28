<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Session;

use Illuminate\Http\Request;

class TaiKhoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('taikhoan')->join('khachhang','khachhang.kh_id','taikhoan.kh_id')
        ->get();
        return view('layout.admin.taikhoan.index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
    public function formupdate( $id)
    {
        $data = DB::table('taikhoan')->join('khachhang','khachhang.kh_id','taikhoan.kh_id')->where('tk_id',$id)->first();
        return view('layout.admin.taikhoan.sua',compact('data'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->tk_password);
        if($request->tk_password != null)
        {
          
            $tk['password']=md5($request->tk_password);  
            $data=DB::table('taikhoan')->where('tk_id',$id)->update($tk);
            if($data){
                Session::put('mess','Cập nhật thành công tài khoản!');
                return redirect()->route('taikhoan.index');
            }
        }
        Session::put('mess','Cập nhật thành công tài khoản!');
        return redirect()->route('taikhoan.index');

       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = DB::table('taikhoan')->where('tk_id',$id)->first();
        // dd($d->kh_id);
        DB::table('taikhoan')->where('tk_id',$id)->delete();
       
        $data= DB::table('khachhang')->where('kh_id',$d->kh_id)->delete();
        if($data){
            Session::put('mess','Xóa thành công tài khoản!');
            return redirect()->route('taikhoan.index');
        }
    }
}
