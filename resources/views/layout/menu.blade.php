 <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.html" class="@yield('menu-trangchu')">TRANG CHỦ</a></li>
                           
                            <li  class="@yield('menu-thongbao')"><a href="{{route('ThongBao')}}">THÔNG BÁO</a></li>
                            <li class="@yield('menu-quanly')">
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">QUẢN LÝ <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li  role="presentation"><a role="menuitem" tabindex="-1" href="ui.html">SINH VIÊN</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LỚP</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">MÔN HỌC</a></li>
                                </ul>
                            </li>
                            <li class="@yield('menu-yeucau')"><a href="{{route('YeuCau')}}">YÊU CẦU</a></li>
                             <!-- <li><a href="table.html">TABLES</a></li> -->
                            <li class="@yield('menu-thaoluan')"><a href="{{route('ThaoLuan')}}">THẢO LUẬN</a></li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>