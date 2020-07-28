<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Cart ;
use Auth;
class GioHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layout.users.giohang.index');
    }
    public function getcart(Request $request)
    {
        if(Auth::guard('taikhoan')->id() !=0){

            $sach_info = DB::table('sach')->where('s_id', $request->book_id)->first();
            // Cart::add('293ad', 'Product 1', 1, 9.99, 550);
            // dd($sach_info->s_hinhanh);
            $data['id']=$request->book_id;
            $data['qty']=$request->soluong;
            $data['name']=$sach_info->s_ten;
            $data['price']=$sach_info->s_gia;
            $data['weight']=1;
            $data['options']['image']=$sach_info->s_hinhanh;
    
            Cart::add($data);
            // Cart::destroy();
            return redirect()->route('sach.giohang');
        }
        else{
            echo '<a href="#">Bạn chưa đăng nhập!</a>';
        }
       
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
    public function update(Request $request)
    {
        Cart::update($request->cart_id,$request->soluong);
        return redirect()->route('sach.giohang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::update($id,0);
        return redirect()->route('sach.giohang');
    }
}
