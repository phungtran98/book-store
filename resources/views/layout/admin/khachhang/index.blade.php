@extends('layout.admin.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            @if(Session::has('mess'))
            <div class="alert alert-success" style="width:82%;">
               {{Session::get('mess')}}
               
            </div>
            {{Session::put('mess',null)}}
            @endif
        </div>
    </div>
</div>
<div class="table-agile-info">  
    <div class="container">
        <div class="row">
          
            <div class="col-sm-5" >
                <small>
                  <a href="#myModal" data-toggle="modal" class="tst4 btn btn-success" style="margin-left: -15px;">Thêm khách hàng
                </a></small>
              </div>
                
        </div>
    </div>
    <div class="panel panel-default">
       <div class="panel-heading">
        Khách hàng
       </div>
       <div>
         <table class="table" >
           <thead>
             <tr>
               <th>Tên KH</th>
               <th>Giới tính</th>
               <th>Email</th>
               <th>SDT</th>
               <th>Địa chỉ</th>
               <th >Chức năng</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($data as $val)
               <tr>
                    <td>{{$val->kh_ten}}</td>
                    @if($val->kh_gtinh ==1)
                        <td>Nam</td>
                    @else
                        <td>Nữ</td>
                    @endif
                    <td>{{$val->kh_email}}</td>
                    <td>{{$val->kh_sdt}}</td>
                    <td>{{$val->kh_diachi}}</td>
                    <td>
                            <a href="{{ route('khachhang.id', ['id'=>$val->kh_id]) }}"> <i class="fa fa-edit"></i></a>&nbsp;  &nbsp;  &nbsp;
                            <a href="{{ route('khachhang.delete', ['id'=>$val->kh_id]) }}"  style="border: none;background-color: Transparent;color: red;"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
              
           
           </tbody>
         </table>
       </div>
     </div>
</div>
<form action="{{ route('khachhang.submit') }}" method="POST" enctype="multipart/form-data">
    @csrf
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title text-center">Thêm khách hàng</h4>
            </div>
            <div class="modal-body">
                   <div class="left">
                    <div class="form-group">
                        
                        <img id="image" class="card-img-top" src="{{asset('bookshop/img/book/1.jpg')}}" />
                            <input type="file" id="upload-image" name='kh_avatar' accept="image/*" value="" required
                             
                                onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                        </div> 
                        <div class="form-group">
                            <label for="a">Họ tên:</label>
                            <input type="text" name="kh_ten" class="form-control" id="a3">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email:</label>
                            <input type="email" name="kh_email" class="form-control" id="exampleInputEmail3">
                        </div>
                        <div class="form-group">
                            <label for="a2">Số điện thoại:</label>
                            <input type="text" name="kh_sdt" class="form-control" id="a2">
                        </div>
                   </div>
                   
                   <div class="right">
                        <div class="form-group">
                            <label for="a4">Địa chỉ:</label>
                            <input type="text" name="kh_diachi" class="form-control" id="a4">
                        </div>
                        <div class="form-group">
                            <label for="a5">Giới tính:</label>
                        <br>
                            <input type="radio" name="kh_gtinh" checked value="1" >Nam &nbsp;&nbsp;&nbsp;
                            <input type="radio" name="kh_gtinh" value="0" >Nữ

                        </div>
                        <div class="form-group">
                            <label>Tài khoản:</label>
                            <input type="text" class="form-control" name="tk_username" >
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu:</label>
                            <div class="input-group" id="show_hide_password" >
                              <input class="form-control" type="password" name="tk_password">
                              <div class="input-group-addon">
                                <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                              </div>
                            </div>
                        </div>
                   </div>
                   
        
                    <button type="submit" class="btn btn-success btn-block">Lưu</button>
            </div>
        </div>
    </div>
</div>
</form>
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