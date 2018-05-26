@extends('layout.master_sinhvien')

@section('menu-quanly','menu-top-active')

@section ('title','Thông báo')

@section('content')

<div class="content-wrapper">
 <div class="container">

  <!-- <div class="row pad-botm">
    <div class="col-md-12">
      <h4 class="header-line">Quản Lý Nhóm</h4>
    </div>
  </div> -->

  <div class="row">
   <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-info back-widget-set text-center">
      <i class="fa fa-user fa-5x"></i>
      <h3>Vương Anh Kho</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-success back-widget-set text-center">
      <i class="fa fa-bookmark fa-5x"></i>
      <h3>DH51400553</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-warning back-widget-set text-center">
      <i class="fa fa-mortar-board fa-5x"></i>
      <h3>D14-TH02</h3>
    </div>
  </div>

  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="alert alert-danger back-widget-set text-center">
      <i class="fa fa-users fa-5x"></i>
      <h3>30+ </h3>
    </div>
  </div>



  </div>              



  <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Chuyển nhóm</h4>
            </div>
            
              <div class="col-md-6 col-sm-6 col-xs-12">
   <div class="panel panel-info">
    <div class="panel-heading">
      Form Chuyển nhóm
   </div>
   <div class="panel-body">
    <form role="form">
      <div class="form-group">
        <label>Họ & Tên</label>
        <input class="form-control" type="text" />
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label>Lớp</label>
        <input class="form-control" type="text" />
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label>Mã số SV</label>
        <input class="form-control" type="text" />
        <p class="help-block"></p>
      </div>
      <div class="form-group">
          <label>Chọn Nhóm</label>
          <select class="form-control">
              <option>Nhóm 1</option>
              <option>Nhóm 2</option>
              <option>Nhóm 3</option>
              <option>Nhóm 4</option>
          </select>
      </div>
      <div class="form-group">
        <label>Lý do chuyển nhóm</label>
        <textarea class="form-control" rows="3"></textarea>
      </div>

      <button type="submit" class="btn btn-info">Gửi yêu cầu</button>

    </form>
  </div>
</div>
</div>

 <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                           Danh Sách Nhóm
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên</th>
                                            <th>Mã Số</th>
                                            <th>Lớp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Thi Trường Minh</td>
                                            <td>DH51400704</td>
                                            <td>D14-TH02</td>
                                        </tr>
                                        <tr class="info">
                                            <td>2</td>
                                            <td>Vương Anh Kho</td>
                                            <td>DH51400553</td>
                                            <td>D14-TH02</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>Nguyễn Chung Tú</td>
                                            <td>DH51400553</td>
                                            <td>D14-TH02</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>Thái Kim Thanh</td>
                                            <td>DH51400553</td>
                                            <td>D14-TH02</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>5</td>
                                            <td>Huỳnh Trí Minh</td>
                                            <td>DH51400553</td>
                                            <td>D14-TH02</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
  </div>
      
</div>

</div>
</div>

@endsection