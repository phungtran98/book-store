@extends('layout.users.master')

@section('content')
<div class="sidebar-right">
<h2 class="text-center">Kết quả tìm kiếm</h2>
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>Tìm thấy:  <span style="color: red;"> {{$data->count()}}</span></h5>
            </div>
        </div>
        <div class="row my-3">
            @if ($data->count() > 0)
                @foreach ($data as $val)
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
                @endforeach
            @endif


        </div>
        {{-- {{$data->links()}} --}}

    </div>

</div>
@endsection
