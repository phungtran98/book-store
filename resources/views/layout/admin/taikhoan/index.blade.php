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
          
            {{-- <div class="col-sm-5" >
                <small>
                  <a href="#myModal" data-toggle="modal" class="tst4 btn btn-success" style="margin-left: -15px;">Tài khoản
                </a></small>
              </div> --}}
                
        </div>
    </div>
    <div class="panel panel-default">
       <div class="panel-heading">
        Tài khoản
       </div>
       <div>
         <table class="table" >
           <thead>
             <tr>
               <th>Tên tài khoản</th>
               <th>Tên khách hàng</th>
              
               <th >Chức năng</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($data as $val)
               <tr>
                    <td>{{$val->username}}</td>
                    <td>{{$val->kh_ten}}</td>
                    
                    <td>
                            <a href="{{ route('taikhoan.id', ['id'=>$val->tk_id]) }}"> <i class="fa fa-edit"></i></a>&nbsp;  &nbsp;  &nbsp;
                            <a href="{{ route('taikhoan.delete', ['id'=>$val->tk_id]) }}"  style="border: none;background-color: Transparent;color: red;"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
              
           
           </tbody>
         </table>
       </div>
     </div>
</div>


@endsection