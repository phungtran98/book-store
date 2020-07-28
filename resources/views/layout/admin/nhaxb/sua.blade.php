@extends('layout.admin.master')
@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Cập nhật nhà xuất bản
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ route('nhaxb.capnhat', ['id'=>$data->nxb_id]) }}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="examplename">Tên nhà xuất bản</label>
                            <input type="text" value="{{$data->nxb_ten}}" class="form-control" name="nxb_ten" id="examplename" >
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