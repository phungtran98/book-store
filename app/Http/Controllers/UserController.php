<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Cart;
use App\Taikhoan;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    
    public function getLogin()
    {
        return view('layout.users.login.login1');
    }
    public function getRegister()
    {
        return view('layout.users.login.register');
    }
    public function postLogin(Request $request)
    {
        $arr = [
            'username' => $request->username,
            'password' =>($request->password) ,
        ];
        // dd($arr);
        //  dd(Auth::guard('taikhoan'));
        // if ($request->remember == trans('remember.Remember Me')) {
        //     $remember = true;
        // } else {
        //     $remember = false;
        // }
        //kiểm tra trường remember có được chọn hay không
        if (Auth::guard('taikhoan')->attempt($arr)) {
           
            if(Auth::guard('taikhoan')->user()->tk_id == 1)
            {
                // dd(Auth::guard('taikhoan')->user()->tk_id);
                return redirect()->route('dashboard');
            }
            else
                return redirect()->route('trangchu');
        } else {

            dd('tài khoản và mật khẩu chưa chính xác');
            //...code tùy chọn
            //đăng nhập thất bại hiển thị đăng nhập thất bại
        }
    }

    //

        public function logout()
            {
                Auth::guard('taikhoan')->logout();
                Cart::destroy();
                return redirect()->route('trangchu');
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
