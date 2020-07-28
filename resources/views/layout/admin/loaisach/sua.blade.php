@extends('layout.admin.master')
@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Cập nhật loại sách
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ route('loaisach.capnhat', ['id'=>$data->ls_id]) }}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="examplename">Mã loại sách</label>
                            <input type="text" value="{{$data->ls_ma}}" class="form-control" name="ls_ma" id="examplename" placeholder="Nhập mã loại sách">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tên loại sách</label>
                                <input type="text" value="{{$data->ls_ten}}" class="form-control" name="ls_ten"  id="exampleInputPassword1" placeholder="Nhập tên loại sách">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả</label>
                                <textarea class="form-control" name="ls_mota"  name="" id="" cols="20" rows="5">{{$data->ls_mota}}</textarea>
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
@endsection