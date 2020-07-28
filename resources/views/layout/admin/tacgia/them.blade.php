@extends('layout.admin.master')
@section('content')
<div class="form-w3layouts">
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       Thêm tác giả
                    </header>
                    <div class="panel-body">
                        <div class="position-center">
                            <form action="{{ route('tacgia.submit')}}" method="POST">
                                @csrf
                            <div class="form-group">
                                <label for="examplename">Tên tác giả</label>
                                <input type="text" class="form-control" name="tg_ten" id="examplename" placeholder="Nhập tên tác giả">
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Lưu</button>
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