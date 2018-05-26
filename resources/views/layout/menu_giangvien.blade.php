 <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="giang-vien" class="@yield('menu-trangchu')">TRANG CHỦ</a></li>
                           
                            <li  class="@yield('menu-thongbao')"><a href="giang-vien/thong-bao">THÔNG BÁO</a></li>
                            
                            <li class="@yield('menu-quanly')">
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">QUẢN LÝ <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li  role="presentation"><a role="menuitem" tabindex="-1" href="giang-vien/quan-ly-sinh-vien">SINH VIÊN</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="giang-vien/quan-ly-lop">LỚP</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="giang-vien/quan-ly-mon-hoc">MÔN HỌC</a></li>
                                </ul>
                            </li>
                            

                            <li class="@yield('menu-yeucau')"><a href="giang-vien/yeu-cau">YÊU CẦU</a></li>
                             <!-- <li><a href="table.html">TABLES</a></li> -->
                            <li class="@yield('menu-thaoluan')"><a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">THẢO LUẬN <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                     <li  role="presentation"><a role="menuitem" tabindex="-1" href="#">NHÓM</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">LỚP</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="#">MÔN HỌC</a></li>
                                </ul></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>