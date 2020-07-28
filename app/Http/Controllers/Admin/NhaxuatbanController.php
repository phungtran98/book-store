<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Session;

use Illuminate\Http\Request;

class NhaxuatbanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('nhaxb')->get();
        return view('layout.admin.nhaxb.index',compact('data'));
    }
    public function form()
    {
      
        return view('layout.admin.nhaxb.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data['nxb_ten'] = $request->nxb_ten;
        $result= DB::table('nhaxb')->insert($data);
        if($result){
            Session::put('mess','Thêm thành công nhà xuất bản');
            return redirect()->route('nhaxb.index');
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
        $data =DB::table('nhaxb')->where('nxb_id',$id)->first();
        return view('layout.admin.nhaxb.sua',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data['nxb_ten'] = $request->nxb_ten;
        $result= DB::table('nhaxb')->where('nxb_id',$id)->update($data);
        if($result){
            Session::put('mess','Cập nhật thành công nhà xuất bản!');
            return redirect()->route('nhaxb.index');
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
        $result= DB::table('nhaxb')->where('nxb_id',$id)->delete();
        if($result){
            Session::put('mess','Xóa thành công thành công nhà xuất bản');
            return redirect()->route('nhaxb.index');
        }
    }
}
