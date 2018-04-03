 <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="sinh-vien" class="@yield('menu-trangchu')">TRANG CHỦ</a></li>
                           
                            <li  class="@yield('menu-thongbao')"><a href="sinh-vien/thong-bao">THÔNG BÁO</a></li>
                            @can('sinh_vien')
                            <li class="@yield('menu-quanly')">
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">NHÓM <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li  role="presentation"><a role="menuitem" tabindex="-1" href="sinh-vien/nhom/danh-sach">DANH SÁCH</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="sinh-vien/nhom/dang-ky">ĐĂNG KÝ</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="sinh-vien/nhom/chuyen-nhom">CHUYỂN NHÓM</a></li>
                                </ul>
                            </li>
                            @endcan
                            <li class="@yield('menu-yeucau')"><a href="sinh-vien/yeu-cau">YÊU CẦU</a></li>
                             <!-- <li><a href="table.html">TABLES</a></li> -->
                            <li class="@yield('menu-thaoluan')"><a href="sinh-vien/thao-luan">THẢO LUẬN</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>