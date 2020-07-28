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
                            <form action="{{ route('sach.capnhat.submit',$data->s_id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="col-6">
                                    <div class="form-group">
                                    <label for="">Hình ảnh:</label>
                                    <input type="file"class="form-control" name="s_hinhanh" >
                                    </div>
                                    <div class="form-group">
                                    <label for="">Tên sách:</label>
                                    <input type="text"class="form-control" value="{{$data->s_ten}}" name="s_ten" >
                                    </div> 
                                    <div class="form-group">
                                    <label for="">Giá:</label>
                                    <input type="text"class="form-control" name="s_gia" value="{{$data->s_gia}}">
                                    </div>
                                    <div class="form-group">
                                    <label for="">Trạng thái:</label>
                                    <select class="form-control" name="s_trangthai" id="">
                                        @if($data->s_trangthai == 1)
                                        <option value="1" selected>Hiện thị</option>
                                        <option value="0">Không hiện thị</option>
                                        @else
                                        <option value="0"selected>Không hiện thị</option>
                                        <option value="1" >Hiện thị</option>
                                        @endif
                                    </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="">Loại sách:</label>
                                        <select class="form-control" name="ls_id" id="">
                                          <option value="{{$data->ls_id}}" selected>{{$data->ls_ten}}</option>
                                        @foreach ($loaisach as $val)
                                             <option value="{{$val->ls_id}}">{{$val->ls_ten}}</option>
                                        @endforeach
                                       
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tác giả:</label>
                                        <select class="form-control" name="tg_id" id="">
                                          <option value="{{$data->tg_id}}" selected>{{$data->tg_ten}}</option>
                                            @foreach ($tacgia as $val)
                                            <option value="{{$val->tg_id}}">{{$val->tg_ten}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Nhà xuất bản:</label>
                                        <select class="form-control" name="nxb_id" id="">
                                          <option value="{{$data->nxb_id}}" selected>{{$data->nxb_ten}}</option>
                                            @foreach ($nxb as $val)
                                            <option value="{{$val->nxb_id}}">{{$val->nxb_ten}}</option>
                                       @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Mô tả</label>
                                    <textarea name="s_mota" id="editor1" rows="10" cols="80" >{{$data->s_mota}}</textarea>
                                    </div>
                                    <button class="tn btn-warning"  type="submit" >Cập nhật</button>
                                    <button class="tn btn-"  type="reset" >Làm lại</button>
                                </div> 
                               
                            </form> 
                        </div>
                    </div>
                </section>
        </div>
    </div>
 </div>
    <!-- page end-->
    </div>
    @push('script')
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
    @endpush
@endsection