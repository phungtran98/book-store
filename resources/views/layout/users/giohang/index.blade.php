@extends('layout.users.master')
@push('css')
    <style>
        .panel-table .panel-body .table-bordered > thead > tr > th:first-of-type {
        text-align:center;
        width: 100px;
    }

    .panel-table .panel-body .table-bordered > tbody > tr > td{
    line-height: 34px;
    }
    .panel-body {
            width: 830px;
            font-family: 'Times New Roman', Times, serif;
        }
            .form-group.update {
            float: right;
            margin-top: 0px;
        }
    </style>
@endpush
@section('content')
{{-- {{$content = Cart::content()}} --}}
<div class="sidebar-right">
    <h2 class="text-center">Chi Tiết giỏ hàng</h2>
    <div class="container">
        <div class="row my-3">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                      <div class="col col-xs-6">
                        <h3 class="panel-title">Sản phẩm của bạn</h3>
                      </div>
                    </div>
                  </div>
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-list">
                    <thead>
                      <tr>
                          <th>Hình ảnh</th>
                          <th>Tên</th>
                          <th>Giá</th>
                          <th>Số lượng</td>
                          <th>Thành tiền</th>

                      </tr> 
                    </thead>
                    <tbody>
                        @foreach (Cart::content() as $val)
                            <tr>
                                <td ><img src="{{asset('backend/images/sach').'/'.$val->options->image}}" alt="" style="width: 100px; height: 120px;"></td>
                                <td>{{$val->name}}</td>
                                <td style="text-align: center; width: 100px">{{number_format($val->price)}}</td>
                                <td style=" font-size:20px;">
                                    <form action="{{ route('giohang.capnhat') }}" method="post">
                                        @csrf
                                        {{$val->qty}} 
                                        <span>
                                           <div class="form-group update">
                                            <input aria-label="quantity" class="btn" max="10" min="1" name="soluong" type="number" value="1" style="width:60px;height: 30px; text-align:center; margin-left:5px;">
                                            <button type="submit" class="btn btn-warning">Cập nhật</button>
                                            <input type="hidden" name="cart_id" value="{{$val->rowId}}">
                                           </div>
                                        </span>
                                    </form>
                                </td>
                                <td> 
                                    <span  style="color:#5fce0b; font-size:20px; margin: 10px;">{{number_format($val->price * $val->qty)}} </span>vnđ  
                                    <a href="{{ route('giohang.xoa',$val->rowId) }}"><i style="text-align: center; font-size:20px; color:red; margin-left:10px;" class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach 
                        <tr>
                            <td colspan="4" style="font-size: 25px; font-weight:bold">Tổng tiền:</td>
                            <td style="font-size: 20px; font-weight:bold">{{Cart::subtotal()}} VNĐ</td>
                        </tr>
                        <tr>
                            <td colspan="5">
                                <form action="{{ route('giohang.thanhtoan') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="amount" value="{{number_format((float)Cart::subtotal())}}">
                                    <button class="btn btn-success" type="submit">Thanh toán</button>
                                </form>
                            </td>
                        </tr>
                  </table>
              
                </div>
               
              </div>
           
        </div>
    </div>

</div>
@endsection