<?php

namespace App\Http\Controllers\Users;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChiTietSachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $sach = DB::table('sach')
        ->join('tacgia','tacgia.tg_id','sach.tg_id')
        ->join('nhaxb','nhaxb.nxb_id','sach.nxb_id')
        ->where('sach.s_id',$id)->first();
        $loaisach_id = $sach->ls_id;

        $goiy = DB::table('sach')
         ->join('loaisach','loaisach.ls_id','sach.ls_id')
        ->where('loaisach.ls_id',$loaisach_id)
        ->whereNotIn('sach.s_id',[$id])
        ->get();




        $binhluan = DB::table('binhluan')->join('khachhang','khachhang.kh_id','binhluan.kh_id')->where('binhluan.s_id',$id)->get();
        return view('layout.users.chitietsach.index',compact('sach','binhluan','goiy'));
    }
    public function ajaxcomment(Request $request)
    {
        $sach_id = $request->sach;
        $data['bl_noidung']= $request->noidung;
        $data['s_id'] = $request->sach;
        $data['kh_id'] = $request->khachhang;

        $result =DB::table('binhluan')->insert($data);
        if($result)
        {
            // return response()->json(['success'=>'Thành công'],200);
            $binhluan = DB::table('binhluan')->join('khachhang','khachhang.kh_id','binhluan.kh_id')->where('binhluan.s_id',$sach_id)->orderBy('binhluan.bl_id','DESC')->limit(1)->get();
            return response()->json(['success'=>$binhluan],200);
        }
       
       
    }




    public function ajaxgetcomment(Request $request)
    {
        $id = $request->id;
        $binhluan = DB::table('binhluan')->join('khachhang','khachhang.kh_id','binhluan.kh_id')->where('binhluan.s_id',$id)->get();
        return response()->json(['success'=>$binhluan],200);
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
