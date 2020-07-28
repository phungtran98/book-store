<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Illuminate\Http\Request;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =DB::table('khachhang')->get();
        return view('layout.admin.khachhang.index',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->file('kh_avatar')){

            $file=$request->file('kh_avatar');
            $filename =$file->getClientOriginalName('kh_avatar');
            $file->move('bookshop/img/khachhang',$filename);

            $data['kh_ten']=$request->kh_ten;
            $data['kh_email']=$request->kh_email;
            $data['kh_sdt']=$request->kh_sdt;
            $data['kh_gtinh']=$request->kh_gtinh;
            $data['kh_diachi']=$request->kh_diachi;
            $data['kh_avatar']=$filename;
            // dd($data);
            $kh_id= DB::table('khachhang')->insertGetId($data);

            $tk['tk_username']=$request->tk_username;
            $tk['tk_password']=md5($request->tk_password);
            $tk['kh_id']=$kh_id;

            DB::table('taikhoan')->insert($tk);

            if($kh_id){
                Session::put('mess','Thêm thành công khách hàng!');
                return redirect()->route('khachhang.index');
            }
           
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
       
        $data = DB::table('khachhang')->join('taikhoan','taikhoan.kh_id','khachhang.kh_id')
        ->where('khachhang.kh_id',$id)->first();
        // dd($data);

        return view('layout.admin.khachhang.sua',compact('data'));
    }
    public function update(Request $request, $id)
    {
        if($request->file('kh_avatar')){

            $file=$request->file('kh_avatar');
            $filename =$file->getClientOriginalName('kh_avatar');
            $file->move('bookshop/img/khachhang',$filename);

            $data['kh_ten']=$request->kh_ten;
            $data['kh_email']=$request->kh_email;
            $data['kh_sdt']=$request->kh_sdt;
            $data['kh_gtinh']=$request->kh_gtinh;
            $data['kh_diachi']=$request->kh_diachi;
            $data['kh_avatar']=$filename;

            $kh_id= DB::table('khachhang')->where('kh_id',$id)->update($data);
    
            if($request->tk_password != null)
            {
              
                $tk['tk_password']=md5($request->tk_password);  
                DB::table('taikhoan')->where('kh_id',$id)->update($tk);
            }

            if($kh_id){
                Session::put('mess','Cập nhật thành công khách hàng!');
                return redirect()->route('khachhang.index');
            }
           
        }
        else
        {
            $data['kh_ten']=$request->kh_ten;
            $data['kh_email']=$request->kh_email;
            $data['kh_sdt']=$request->kh_sdt;
            $data['kh_gtinh']=$request->kh_gtinh;
            $data['kh_diachi']=$request->kh_diachi;
           

            $kh_id= DB::table('khachhang')->where('kh_id',$id)->update($data);
    
            if($request->tk_password != null)
            {
              
                $tk['tk_password']=md5($request->tk_password);  
                DB::table('taikhoan')->where('kh_id',$id)->update($tk);
            }

            if($kh_id){
                Session::put('mess','Cập nhật thành công khách hàng!');
                return redirect()->route('khachhang.index');
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
        DB::table('taikhoan')->where('kh_id',$id)->delete();
        $kh_id= DB::table('khachhang')->where('kh_id',$id)->delete();
        
        if($kh_id){
            Session::put('mess','Xóa thành công khách hàng!');
            return redirect()->route('khachhang.index');
        }
    }
}
