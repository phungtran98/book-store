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
                  <a href="{{ route('loaisach.form')}}" class="tst4 btn btn-success" style="margin-left: -15px;">Thêm thể loại sách
                </a></small>
              </div>
                
        </div>
    </div>
    <div class="panel panel-default">
       <div class="panel-heading">
        Thể loại sách
       </div>
       <div>
         <table class="table" >
           <thead>
             <tr>
               <th>Mã loại</th>
               <th>Tên loại sách</th>
               <th>Mô tả</th>
               <th >Chức năng</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($data as $val)
               <tr>
                    <td>{{$val->ls_ma}}</td>
                    <td>{{$val->ls_ten}}</td>
                    <td>{{$val->ls_mota}}</td>
                    <td>
                            <a href="{{ route('loaisach.id', ['id'=>$val->ls_id]) }}"> <i class="fa fa-edit"></i></a>&nbsp;  &nbsp;  &nbsp;
                            <a href="{{ route('loaisach.delete', ['id'=>$val->ls_id]) }}"  style="border: none;background-color: Transparent;color: red;"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
               @endforeach
              
           
           </tbody>
         </table>
       </div>
     </div>
</div>
@endsection