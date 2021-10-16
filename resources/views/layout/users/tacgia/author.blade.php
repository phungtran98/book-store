@extends('layout.users.master')

@section('content')
<div class="sidebar-right">
<h2 class="text-center">{{$tacgia1->tg_ten}}</h2>
    <div class="container">
        <div class="row my-3">
                @forelse ($data as $val)
                <div class="col-sm-4 d-flex align-items-stretch my-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="{{ route('sach.chitiet',$val->s_id) }}"><img src="{{asset('backend/images/sach').'/'.$val->s_hinhanh}}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">{{$val->s_ten}}</p>
                            <p class="single-item-price">
                                <span>{{ number_format($val->s_gia)}} vnđ</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="#"><i class="fa fa-shopping-cart"></i></a>
                            <a class="btn detail" href="{{ route('sach.chitiet',$val->s_id) }}">Chi tiết<i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                @empty
                <h3>Không tìm thấy sản phẩm!</h3>
                @endforelse

          
        </div>
        {{$data->links()}}
        
    </div>

</div>
@endsection