<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Session;
class TacgiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('tacgia')->get();
        return view('layout.admin.tacgia.index',compact('data'));
    }
    public function form()
    {
        return view('layout.admin.tacgia.them');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data['tg_ten'] = $request->tg_ten;
        $result= DB::table('tacgia')->insert($data);
        if($result){
            Session::put('mess','Thêm thành công tác giả');
            return redirect()->route('tacgia.index');
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
        $data =DB::table('tacgia')->where('tg_id',$id)->first();
        return view('layout.admin.tacgia.sua',compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data['tg_ten'] = $request->tg_ten;
        $result= DB::table('tacgia')->where('tg_id',$id)->update($data);
        if($result){
            Session::put('mess','Cập nhật thành công tác giả');
            return redirect()->route('tacgia.index');
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
        $result= DB::table('tacgia')->where('tg_id',$id)->delete();
        if($result){
            Session::put('mess','Xóa thành công tác giả');
            return redirect()->route('tacgia.index');
        }
    }
}
