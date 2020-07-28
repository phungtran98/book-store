<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="sidebar-left">
                    <h2>Thể Loại Sách</h2>
                    <div class="panel-group caterogy-product">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#sportswear">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Sách Tiếng Việt
                                    </a>
                                </h4>
                            </div>
                            <div id="sportswear" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        @foreach ($loaisach as $val)
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="{{ route('sach.theoloai', $val->ls_id) }}">{{$val->ls_ten}}</a></li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#mens">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Sách Tiếng Anh
                                    </a>
                                </h4>
                            </div>
                            <div id="mens" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Art</a></li>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Architecture</a></li>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Biographies</a></li>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">CookBooks, Food & Wine</a></li>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">History</a></li>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Home & Garden</a></li>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Humor</a></li>
                                        <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="#">Psychology</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse">
                                        Đồ lưu niệm
                                    </a>
                                </h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse">
                                        Văn Phòng Phẩm
                                    </a>
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="brands_products">
                        <!--brands_products-->
                        <h2>Tác Giả</h2>
                        <div class="author">
                            <div class="panel-body">
                                <ul>
                                    @foreach ($tacgia as $val)
                                    <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="{{ route('tacgia.theoloai',$val->tg_id) }}">{{$val->tg_ten}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="brands_products">
                        <!--brands_products-->
                        <h2>Nhà xuất bản</h2>
                        <div class="author">
                            <div class="panel-body">
                                <ul>
                                    @foreach ($nxb as $val)
                                <li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="{{ route('tacgia.theoloai',$val->nxb_id) }}">{{$val->nxb_ten}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                    <!--/brands_products-->
                </div>
            </div>
            <div class="col-sm-9">
                @yield('content')
            </div>
        </div>
        {{--end product --}}
       
    </div>
</section>