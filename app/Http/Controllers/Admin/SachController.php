<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class SachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('sach')->get();
        $tacgia =DB::table('tacgia')->get();
        $nxb = DB::table('nhaxb')->get();
        $loaisach =DB::table('loaisach')->get();

        return view('layout.admin.sach.index',compact('data','tacgia','nxb','loaisach'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('s_hinhanh'))
        {
            $file = $request->file('s_hinhanh');
            $hinhanh = $file->getClientOriginalName('s_hinhanh');
            $file->move('backend/images/sach',$hinhanh);

            $data['s_ten']=$request->s_ten;
            $data['s_gia']=$request->s_gia;
            $data['s_hinhanh'] = $hinhanh;
            $data['s_mota']=$request->s_mota;
            $data['s_trangthai']=$request->s_trangthai;
            $data['ls_id']=$request->ls_id;
            $data['tg_id']=$request->tg_id;
            $data['nxb_id']=$request->nxb_id;
            $data['s_noidung']=$request->s_noidung;
            // dd($data);

            $result = DB::table('sach')->insert($data);
        if($result)
        {
            Session::put('mess','Thêm thành công sách!');
            return redirect()->route('sach.index');
        }
        }
        else{
            echo "không";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatestatus($id,$st)
    {
       if($st == 1)
       {
            $data['s_trangthai'] =0;
            $result = DB::table('sach')->where('s_id',$id)->update($data);


                Session::put('mess','Cập nhật thành công trạng thái!');
                return redirect()->route('sach.index');

       }
       else
            if($st == 0)
            {
                $data['s_trangthai'] =1;
                $result = DB::table('sach')->where('s_id',$id)->update($data);

                    Session::put('mess','Cập nhật thành công trạng thái!');
                    return redirect()->route('sach.index');

            }
    }




    public function getform($id)
    {


        $data = DB::table('sach')
        ->join('tacgia','tacgia.tg_id','sach.tg_id')
        ->join('nhaxb','nhaxb.nxb_id','sach.nxb_id')
        ->join('loaisach','loaisach.ls_id','sach.ls_id')
        ->where('sach.s_id',$id)->first();

        // dd($data);
        // $tacgia =DB::table('tacgia')->get();
        // $nxb = DB::table('nhaxb')->get();
        // $loaisach =DB::table('loaisach')->get();
        return view('layout.admin.sach.update',compact('data'));
    }
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
        if($request->hasFile('s_hinhanh'))
        {
            $file = $request->file('s_hinhanh');
            $hinhanh = $file->getClientOriginalName('s_hinhanh');
            $file->move('backend/images/sach',$hinhanh);

            $data['s_ten']=$request->s_ten;
            $data['s_gia']=$request->s_gia;
            $data['s_hinhanh'] = $hinhanh;
            $data['s_mota']=$request->s_mota;
            $data['s_trangthai']=$request->s_trangthai;
            $data['ls_id']=$request->ls_id;
            $data['tg_id']=$request->tg_id;
            $data['nxb_id']=$request->nxb_id;

            // dd($data);

            $result = DB::table('sach')->where('s_id',$id)->update($data);
        if($result)
        {
            Session::put('mess','Cập nhật thành công sách!');
            return redirect()->route('sach.index');
        }
        }
        else{
            $data['s_ten']=$request->s_ten;
            $data['s_gia']=$request->s_gia;
            $data['s_mota']=$request->s_mota;
            $data['s_trangthai']=$request->s_trangthai;
            $data['ls_id']=$request->ls_id;
            $data['tg_id']=$request->tg_id;
            $data['nxb_id']=$request->nxb_id;

            // dd($data);

            $result = DB::table('sach')->where('s_id',$id)->update($data);
        if($result)
        {
            Session::put('mess','Cập nhật thành công sách!');
            return redirect()->route('sach.index');
        }
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

        $result = DB::table('sach')->where('s_id',$id)->delete();
        if($result)
        {
            Session::put('mess','Xóa thành công sách!');
            return redirect()->route('sach.index');
        }
    }
}
