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
                  <a data-toggle="modal" data-target="#exampleModal" class="tst4 btn btn-success" style="margin-left: -15px;">Thêm sách
                </a></small>
              <br>
              <br>

              </div>
        </div>
    </div>
    <div class="panel panel-default">
       <div class="panel-heading">
        Sách
       </div>
       <div>
         <table class="table" >
           <thead>
             <tr>
               <th>Tên sách</th>
               <th>Giá sách</th>
               <th>Hình ảnh</th>
               <th>Mô tả</th>
               <th >Trạng thái</th>
               <th>Hành động</th>
             </tr>
           </thead>
           <tbody>
               @foreach ($data as $val)
               <tr>
                    <td>{{$val->s_ten}}</td>
                    <td>{{$val->s_gia}}</td>
                    <td class="book-hinhanh">{{$val->s_hinhanh}}</td>
                    <td>{!! $val->s_mota !!}</td>
                    <td>
                        @if ($val->s_trangthai == 1)
                          <a href="{{ route('sach.trangthai',[$val->s_id,$val->s_trangthai]) }}"><i class="fa fa-chevron-up"></i></a>
                        @else
                            <a href="{{ route('sach.trangthai',[$val->s_id,$val->s_trangthai]) }}"><i class="fa fa-chevron-down"></i></a>
                        @endif


                    </td>
                    <td>
                            <a href="{{ route('sach.capnhat',$val->s_id) }}"> <i class="fa fa-edit"></i></a>&nbsp;  &nbsp;  &nbsp;
                            <a href="{{ route('sach.xoa',$val->s_id) }}"  style="border: none;background-color: Transparent;color: red;"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
               @endforeach


           </tbody>
         </table>
       </div>
     </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm sách</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

        <form action="{{ route('sach.submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col">
                <div class="form-group">
                <label for="">Hình ảnh:</label>
                <input type="file"class="form-control" name="s_hinhanh" >
                </div>
                <div class="form-group">
                <label for="">Tên sách:</label>
                <input type="text"class="form-control" name="s_ten" >
                </div>
                <div class="form-group">
                <label for="">Giá:</label>
                <input type="text"class="form-control" name="s_gia" >
                </div>
                <div class="form-group">
                <label for="">Trạng thái:</label>
                <select class="form-control" name="s_trangthai" id="">
                    <option value="1">Hiện thị</option>
                    <option value="0">Không hiện thị</option>
                </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="">Loại sách:</label>
                    <select class="form-control" name="ls_id" id="">
                      <option value="" selected>---Chọn loại sách---</option>
                    @foreach ($loaisach as $val)
                         <option value="{{$val->ls_id}}">{{$val->ls_ten}}</option>
                    @endforeach

                    </select>
                </div>
                <div class="form-group">
                    <label for="">Tác giả:</label>
                    <select class="form-control" name="tg_id" id="">
                      <option value="" selected>---chọn tác giả---</option>
                        @foreach ($tacgia as $val)
                        <option value="{{$val->tg_id}}">{{$val->tg_ten}}</option>
                   @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Nhà xuất bản:</label>
                    <select class="form-control" name="nxb_id" id="">
                      <option value="" selected>---Chọn nhà XB---</option>
                        @foreach ($nxb as $val)
                        <option value="{{$val->nxb_id}}">{{$val->nxb_ten}}</option>
                   @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mô tả</label>
                    <textarea name="s_mota" id="editor1" rows="10" cols="80" ></textarea>
                </div>
                <div class="form-group">
                    <label for="">Nội dung ngắn</label>
                    <textarea name="s_noidung" id="editor2" rows="10" cols="80" ></textarea>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-warning">Làm lại</button>
          <button type="submit" class="btn btn-success">Lưu</button>
        </div>
    </form>
      </div>
    </div>
  </div>
@push('script')
<script>
    CKEDITOR.replace( 'editor1' );
    CKEDITOR.replace( 'editor2' );
</script>
@endpush
@endsection
