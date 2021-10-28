@extends('layout.users.master')
@section('content')
@push('css')
<style>
 #book-detail {
    width: 220px;
    height: 300px;
    /* width: 200px; */
    /* transform: perspective(460px) rotateY(4deg); */
    /* box-shadow: 35px 19px 53px rgba(0,0,0,.3); */
}
#book-detail img {
    margin: 5px 15px;
    height: 100%;
    width: 100%;
    transform: perspective(500px) rotateY(4deg);
    box-shadow: 9px 5px 10px rgba(0, 0, 0, .3);
    transition: all 0.5s;
}
#book-detail img:hover{
    transform: perspective(500px) rotateY(-4deg);
}
.buttons_added {
    opacity:1;
    display:inline-block;
    display:-ms-inline-flexbox;
    display:inline-flex;
    white-space:nowrap;
    vertical-align:top;
}


.input-qty {
    background-color:#fff;
    height:2.2rem;
    text-align:center;
    font-size:1rem;
    display:inline-block;
    vertical-align:top;
    margin:0;
    border-top:1px solid #ddd;
    border-bottom:1px solid #ddd;
    border-left:0;
    border-right:0;
    padding:0;
    border-color: #5fce0b;
}

.book-tab{
}
.book-content {
    border: 1px solid #F7F7F0;
    /* background: #fbfbfb; */
    width: 86%;
    margin: auto;
    /* box-shadow: 1px 1px 9px rgba(0, 0, 0, .3); */
}

.book-content .book_name, p {
    margin: 20px 10px;
}
#nav-tab {
    background-color: #67a70d;
}
#nav-tab a{
    color:#ffffe1 ;
}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #ffffff;
    background-color: #7ac19f;
    /* border-color: #dee2e6 #dee2e6 #fff; */
}
.nav-tabs .nav-link {
    border: unset;

}
/* #nav-tabContent {
    border-left: 1px solid #5fce0b;
    border-bottom: 1px solid #5fce0b;
    border-right: 1px solid #5fce0b;
} */
a#book-add-cart i {
    font-size: 20px;
    margin-left: -5px;
    color: white;
    transition: all 0.4s;
}
.btn{
    border: unset;
}

a#book-add-cart:hover button{
    color: red;
    font-size: 22px;
}
.book-comment img {
    width: 50px;
    height: 50px;
    border-radius: 40%;
    float: left;
    margin: 5px;
}

.book-comment {
    width: 100%;
    margin: 10px 7px;
    background-color: #f7f6f6b0;
    display: flex;
    font-family: 'Times New Roman', Times, serif;
}
.book-content-comment p {
    margin: 0;
    font-size: 15px;
    justify-content: left;
    padding: 10px;
    font-family: 'Times New Roman', Times, serif;
}


h1{font-size:1.5em;margin:10px;}
/****** Style Star Rating Widget *****/
#rating {

    top: 22px;
    /* border: 1px solid; */
    height: 40px;
    margin-bottom: 13px;
    width: 260px;
    margin-top: 28px;
}
#rating>input{display:none;}/*ẩn input radio - vì chúng ta đã có label là GUI*/
#rating>label:before{margin:5px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}/*1 ngôi sao*/
#rating>.half:before{content:"\f089";position:absolute;}/*0.5 ngôi sao*/
#rating>label{color:#ddd;float:right;}/*float:right để lật ngược các ngôi sao lại đúng theo thứ tự trong thực tế*/
/*thêm màu cho sao đã chọn và các ngôi sao phía trước*/
#rating>input:checked~label,
#rating:not(:checked)>label:hover,
#rating:not(:checked)>label:hover~label{color:#FFD700;}
/* Hover vào các sao phía trước ngôi sao đã chọn*/
#rating>input:checked+label:hover,
#rating>input:checked~label:hover,
#rating>label:hover~input:checked~label,
#rating>input:checked~label:hover~label{color:#FFED85;}

.book-content-comment {clear: left;margin-left: 18px;}
.write-comment h3 {
    font-size: 27px;
    text-align: center;
    margin: 16px;
    height: 30px;
    color: #5fce0b;
    font-weight: bold;
    text-transform: uppercase;
}
.write-comment p {
    float: left;
}
div#book-submit {
    /* border: 1px solid; */
    width: 200px;
    height: 35px;
    margin: 10px 0px;
    background: #5fce0b;
    color: white;
    font-size: 18px;
    line-height: 24px;
    font-family: 'Times New Roman', Times, serif;
}
button#book-add-cart i {
    color: white;
    font-size: 21px;
    text-align: center;
    margin-left: -4px;
    margin-top: -1px;
}
</style>
@endpush
<input type="hidden" id="s_id"  value="{{$sach->s_id}}">
<input type="hidden" id="kh_id"  value="{{Auth::guard('taikhoan')->id()}}">
{{-- {{dd($goi_y)}} --}}
<div class="sidebar-right">
    <h2 class="text-center">Chi tiết sách</h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 d-flex align-items-stretch">
                <div class="single-item">
                    <div class="single-item-header" id="book-detail">
                        <img src="{{asset('backend/images/sach').'/'.$sach->s_hinhanh}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="book-content">
                    <form action="{{ route('giohang.thongtin')}}" method="post">
                        @csrf
                        <h3 class="book_name">{{$sach->s_ten}}</h3>
                        <p class="book-price">Giá: {{number_format($sach->s_gia)}} vnđ</p>
                        <p class="status">Tình trạng: Còn hàng</p>
                        <p class="author">Tác giả: {{$sach->tg_ten}}</p>
                        <p class="nxb">Nhà xuất bản:  {{$sach->nxb_ten}}</p>
                        <p style="float: left;">Số lượng: </p>
                        <div class="form-group status" >
                        <input type="hidden" name="book_id" value="{{$sach->s_id}}">
                          <input aria-label="quantity" class="input-qty " max="10" min="1" name="soluong" type="number" value="1" style="width:80px;height: 30px;margin-left:10px;clear: left;margin-top: 17px;">
                        </div>
                        <button  id="book-add-cart" type="submit" class="btn" style="width:100px; float: right; margin-top: -48px;margin-right: 90px;background: #FE980F;height: 30px;" href="#" role="button"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>
                    </form>
                </div>
            </div>

        </div>

        <div class="row my-5">
            <div class="col-sm-12 book-tab">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-description" role="tab" aria-controls="nav-description" aria-selected="true">Mô tả</a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-comment" role="tab" aria-controls="nav-comment" aria-selected="false">Bình luận</a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-home-tab" style="font-family: 'Times New Roman', Times, serif;">
                        {!!  $sach->s_mota !!}
                    </div>
                    <div class="tab-pane fade" id="nav-comment" role="tabpanel" aria-labelledby="nav-profile-tab">
                       <p id="echo_comment"></p>
                        <div id="bookkk">
                        </div>

                        @foreach ($binhluan as $item)
                            <div class="book-comment">
                                <img src="{{asset('bookshop/img/user/').'/'.$item->kh_avatar}}" alt="">
                                <div class="book-content-comment">
                                <p>{{$item->bl_noidung}} <span>{{$item->created_at}}</span></p>
                                 </div>
                        </div>
                        @endforeach
                      @if(Auth::guard('taikhoan')->id())
                        <div class="write-comment">
                            <form action="#" method="post">
                                {{-- đánh giá sao  --}}
                            <h3>Viết bình luận</h3>
                            <p>Đánh giá:</p>
                            <div id="rating">
                                    <input type="radio" id="star5" name="rating" class="rating" value="5" />
                                    <label class = "full" for="star5" ></label>

                                    <input type="radio" id="star4half" name="rating"  value="4.5" class="rating"/>
                                    <label class="half" for="star4half" ></label>

                                    <input type="radio" id="star4" name="rating" value="4" class="rating"/>
                                    <label class = "full" for="star4" title="Pretty good - 4 stars"></label>

                                    <input type="radio" id="star3half" name="rating" value="3.5" class="rating"/>
                                    <label class="half" for="star3half" ></label>

                                    <input type="radio" id="star3" name="rating" value="3" class="rating"/>
                                    <label class = "full" for="star3" ></label>

                                    <input type="radio" id="star2half" name="rating" value="2.5" class="rating"/>
                                    <label class="half" for="star2half" ></label>

                                    <input type="radio" id="star2" name="rating" value="2" class="rating"/>
                                    <label class = "full" for="star2" ></label>

                                    <input type="radio" id="star1half" name="rating" value="1.5" class="rating"/>
                                    <label class="half" for="star1half" ></label>

                                    <input type="radio" id="star1" name="rating" value="1" class="rating"/>
                                    <label class = "full" for="star1" ></label>

                                    <input type="radio" id="starhalf" name="rating" value="half" class="rating"/>
                                    <label class="half" for="starhalf" ></label>
                                </div>
                                <div>
                                    <textarea class="form-control noidung"  rows="5" cols="80" ></textarea>
                                </div>
                                <div class="btn" id="book-submit" style="submit" >Gửi</div>
                            </form>
                        </div>
                        @else
                            <h4>Bạn chưa đăng nhập!</h4>
                      @endif
                    </div>
                  </div>
            </div>
        </div>

        {{-- gợi ý sản phẩm liên quan --}}
        <div class="row">
            <div class="col-sm-12">
                <p id="suggestions">Gợi ý cho bạn</p>
            </div>
            <div class="col-sm-12">
                <div class="for_slick_slider multiple-items responsive">
                    @foreach ($goiy as $val)
                    <div class="items">
                        <img src="{{asset('backend/images/sach/').'/'.$val->s_hinhanh}}" alt="">
                    <span class="book_title">{{$val->s_ten}}</span>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="s_id"  value="{{$sach->s_id}}">
    <input type="hidden" id="kh_id"  value="{{Auth::guard('taikhoan')->id()}}">
</div>
@push('script')
<script>
    // CKEDITOR.replace( 'editor1' );

    $(document).ready(function () {

        $('#book-submit').click(function (e) {
            e.preventDefault();
            var noidung = $('.noidung').val();
            var sach = $('#s_id').val();
            var khachhang = $('#kh_id').val();
            $.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
            $.ajax({
                type: "get",
                url: "{{route('sach.ajaxcomment')}}",
                data: {noidung:noidung, sach:sach, khachhang:khachhang},
                dataType: "json",
                success: function (response) {
                    // console.log(response.success);
                    if(response.success !=null){
                        $.each(response.success, function (index, val) {
                            // console.log(val.created_at);
                            var source = "{{asset('bookshop/img/user/')}}" +'/'+ val.kh_avatar;
                            // var time ='d-m-Y H:m';
                            // var timezone = '<span style="margin-left:490px;">{{date('+time+', strtotime('+ val.created_at+'))}}</span>';

                            var noidung ='<div class="book-comment">'+
                                '<img src='+ source +' alt="">'+
                                '<div class="book-content-comment">' +
                                '<p>'+ val.bl_noidung +'</p>'+
                                '</div>'+
                            '</div>';
                            $('#bookkk').append(noidung);
                            // console.log(val.bl_noidung);

                        });
                    }
                }

            });
            $('.noidung').val('');

        });







    });
</script>
@endpush
@endsection
