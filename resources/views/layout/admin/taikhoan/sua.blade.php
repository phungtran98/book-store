@extends('layout.admin.master')
@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Cập nhật tài khoản
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ route('taikhoan.capnhat', ['id'=>$data->tk_id]) }}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="examplename">Tên khách hàng:</label>
                            <input type="text" value="{{$data->kh_ten}}" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="examplename">Tài khoản</label>
                            <input type="text" value="{{$data->username}}" class="form-control" readonly>
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
                        
                            <button type="submit" class="btn btn-block btn-warning">Cập nhật</button>
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