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
                  <a href="{{ route('tacgia.form') }}" class="tst4 btn btn-success" style="margin-left: -15px;">Thêm tác giả
                </a></small>
              </div>
                
        </div>
    </div>
    <div class="panel panel-default">
       <div class="panel-heading">
        Tác giả
       </div>
       <div>
         <table class="table" >
           <thead>
             <tr>
               <th>Tên tác giả</th>
               <th >Chức năng</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($data as $val)
               <tr>
                    <td>{{$val->tg_ten}}
                    </td>
                    <td>
                            <a href="{{ route('tacgia.id',['id'=>$val->tg_id]) }}"> <i class="fa fa-edit"></i></a>&nbsp;  &nbsp;  &nbsp;
                            <a href=" {{ route('tacgia.delete', ['id'=>$val->tg_id]) }}"  style="border: none;background-color: Transparent;color: red;"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
               @endforeach
              
           
           </tbody>
         </table>
       </div>
     </div>
</div>
@endsection