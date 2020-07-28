@extends('layout.admin.master')
@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Cập nhật khách hàng
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ route('khachhang.capnhat',['id'=>$data->kh_id]) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <div class="left">
                                        <img id="image" class="card-img-top" src="{{asset('bookshop/img/khachhang')}}/{{$data->kh_avatar}}" />
                                                <input type="file" id="upload-image" name='kh_avatar' accept="image/*" value="{{$data->kh_avatar}}"
                                                
                                                    onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                                            <div class="form-group">
                                                <label for="a">Họ tên:</label>
                                                <input type="text" value="{{$data->kh_ten}}" name="kh_ten" class="form-control" id="a3">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email:</label>
                                                <input type="email" value="{{$data->kh_email}}" name="kh_email" class="form-control" id="exampleInputEmail3">
                                            </div>
                                            <div class="form-group">
                                                <label for="a2">Số điện thoại:</label>
                                                <input type="text" value="{{$data->kh_sdt}}" name="kh_sdt" class="form-control" id="a2">
                                            </div>
                                    </div>
                                   <div class="rightedit">
                                        <div class="form-group">
                                            <label for="a4">Địa chỉ:</label>
                                            <input type="text" value="{{$data->kh_diachi}}" name="kh_diachi" class="form-control" id="a4">
                                        </div>
                                        <div class="form-group">
                                            <label for="a5">Giới tính:</label>
                                            <br>
                                            @if($data->kh_gtinh == 1)
                                                <input type="radio" name="kh_gtinh" checked value="1" >Nam &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="kh_gtinh" value="0" >Nữ
                                            @else
                                                <input type="radio" name="kh_gtinh"  value="1" >Nam &nbsp;&nbsp;&nbsp;
                                                <input type="radio" name="kh_gtinh" checked value="0" >Nữ
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Tài khoản:</label>
                                            <input type="text" value="{{$data->tk_username}}" class="form-control" name="tk_username" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Mật khẩu mới:</label>
                                            <div class="input-group" id="show_hide_password" >
                                              <input class="form-control" name="tk_password" type="password">
                                              <div class="input-group-addon">
                                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                              </div>
                                            </div>
                                        </div>   
                                   </div>
                                    <button type="submit" class="btn btn-success btn-block">Lưu</button>
                        </form>
                        </div>

                    </div>
                </section>

        </div>
     
 
   
    </div>
 </div>

    


    <!-- page end-->
    </div>
    <script>
    
        //ẩn hiện mk
        $(document).ready(function() {
     $("#show_hide_password a").on('click', function(event) {
         event.preventDefault();
         if($('#show_hide_password input').attr("type") == "text"){
             $('#show_hide_password input').attr('type', 'password');
             $('#show_hide_password i').addClass( "fa-eye-slash" );
             $('#show_hide_password i').removeClass( "fa-eye" );
         }else if($('#show_hide_password input').attr("type") == "password"){
             $('#show_hide_password input').attr('type', 'text');
             $('#show_hide_password i').removeClass( "fa-eye-slash" );
             $('#show_hide_password i').addClass( "fa-eye" );
         }
     });
 });
 
     
 </script>
@endsection