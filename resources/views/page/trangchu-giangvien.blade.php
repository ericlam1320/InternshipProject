@extends('layout.master')

@section ('title','Trang chủ')

@section('menu-trangchu', 'menu-top-active')

@section('content')

<div class="content-wrapper">
 <div class="container">

  <div class="row pad-botm">
    <div class="col-md-12">
      <h4 class="header-line">Giảng Viên</h4>
    </div>
  </div>

<div class="row">
             <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="alert alert-info back-widget-set text-center">
                <i class="fa fa-user fa-5x"></i>
                <h3>Bùi Nhật Bằng</h3>
                Họ & tên
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="alert alert-success back-widget-set text-center">
                <i class="fa fa-bookmark fa-5x"></i>
                <h3>D14-TH02</h3>
                Lớp phụ trách
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="alert alert-warning back-widget-set text-center">
                <i class="fa fa-comment-o fa-5x"></i>
                <h3>50</h3>
                Số yêu cầu
              </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-6">
              <div class="alert alert-danger back-widget-set text-center">
                <i class="fa fa-users fa-5x"></i>
                <h3>3</h3>
                Số nhóm phụ trách
              </div>
            </div>
</div>






   <div class="col-md-4 col-sm-4 col-xs-12" >
    <div class="alert alert-success text-center">
      <h3>Thông báo Nhóm</h3> 
      <i class="fa fa-envelope fa-4x"></i>
      <hr />
      <p>
       Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
       Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
       Lorem ipsum dolor sit amet, consectetur adipiscing elit gthn.
       Lorem ipsum dolor sit amet.
     </p>
     <hr />
     <a href="#" class="btn btn-success">Xem chi tiết</a> 
   </div>
 </div>





<div class="col-md-8 col-sm-8 col-xs-12">
  <div class="panel panel-success">
    <div class="panel-heading">
     DANH SÁCH NHÓM PHỤ TRÁCH
   </div>
   <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>User No.</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>100090</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>100090</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
 </div>
</div>


<div class="row">
   
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-warning">
      <div class="panel-heading">
       Yêu cầu Sinh Viên
      </div>
      <div class="panel-body">
        <ul class="media-list">
          
          <li class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-circle img-comments" src="assets/img/user.gif" />
            </a>
            <div class="media-body">
              <h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
              <p>
                Donec sit amet ligula enim. Duis vel condimentum massa.
                Maecenas eget congue dui
                interdum nibh et, volutpat dolor.
              </p>
            </div>
          </li>
           
          <li class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-circle img-comments" src="assets/img/user.gif" />
            </a>
            <div class="media-body">
              <h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
              <p>
                Donec sit amet ligula enim. Duis vel condimentum massa.
                Maecenas eget congue dui
                interdum nibh et, volutpat dolor.
              </p>
            </div>
          </li>

          <li class="media">
            <a class="pull-left" href="#">
              <img class="media-object img-circle img-comments" src="assets/img/user.gif" />
            </a>
            <div class="media-body">
              <h4 class="media-heading">Lorem ipsum dolor sit amet</h4>
              <p>
                Donec sit amet ligula enim. Duis vel condimentum massa.
                Maecenas eget congue dui
                interdum nibh et, volutpat dolor.
              </p>
            </div>
          </li>

        </ul>
      </div>
    </div>

  </div>
</div>


</div>
</div>

@endsection