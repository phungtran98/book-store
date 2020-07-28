@extends('layout.admin.master')
@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Cập nhật tác giả
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ route('tacgia.capnhat', ['id'=>$data->tg_id]) }}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="examplename">Mã loại sách</label>
                            <input type="text" value="{{$data->tg_ten}}" class="form-control" name="tg_ten" id="examplename" placeholder="Nhập mã loại sách">
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