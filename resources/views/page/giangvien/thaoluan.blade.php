@extends('layout.master_giangvien')

@section('menu-thaoluan','menu-top-active')

@section ('title','Thảo Luận')



@section('style')

<style type="text/css" media="screen">
  /* CSS used here will be applied after bootstrap.css */
.fa-heart{
  color:#e74c3c;
}
  [class^="fa fa-star"]{
    color:#f1c40f;
  }
.fa-quote-right{
  font-size:.5em;
  }
section.panel-title{
    padding:15px;
    padding-top:0;
  }
  #user-description{
    height:100%;
   border-left:2px solid #444; 
    margin:0 auto;
    text-align:center;
  }
 figure img{
    display :inline !important;
  }
  h4.online:before{
     background-color:green;
      height:10px;
      width:10px;
      border: 2px solid #11f464;
    }
dt{
   text-align:left !important; 
     width:37% !important;
    }
    dd{
     margin-left:2% !important;
    }
    
.panel-footer{
    width:100%;
    min-height:40px;
  }
      

</style>


@endsection



@section('content')

<div class="content-wrapper">
  <div class="container">

      <div class="row pad-botm">
        <div class="col-md-12">
          <h4 class="header-line">Thảo luận</h4>
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

        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Danh sách thảo luận</h4>
                </div>

            </div>
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                       <div class="panel panel-info">
                        <div class="panel-heading">
                          Tạo chủ đề
                        </div>
                        <div class="panel-body">

                          <form role="form">

                            <div class="form-group">
                              <label>Họ & Tên</label>
                              <input class="form-control" type="text" />
                              <p class="help-block"></p>
                            </div>

                            <div class="form-group">
                              <label>Tên chủ đề</label>
                              <input class="form-control" type="text" />
                              <p class="help-block"></p>
                            </div>

                            <div class="form-group">
                              <label>Nội dung</label>
                              <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <button type="submit" class="btn btn-info">Tạo</button>
                          </form>
                        </div>
                      </div>
                    </div>


                    <div class="col-md-6 col-sm-6">
                     <div class="panel panel-default">

                      <div class="panel-heading">
                        Chủ đề nổi bật
                      </div>

                          <div class="panel-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>#</th>
                                    <th>Tên chủ đề</th>
                                    <th>Họ & Tên</th>
                                    <th>Số lượt xem</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>1</td>
                                    <td>Web 1</td>
                                    <td>Vương Anh Kho</td>
                                    <td>88888</td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td>Web 2</td>
                                    <td>Thi Trường Minh</td>
                                    <td>787878</td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td>Web 3</td>
                                    <td>Nguyễn Chung Tú</td>
                                    <td>345684</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                       </div>
                      </div>
              </div>


              <div class="row">

              <div class="col-md-6 col-sm-6">

                <div class="panel" >
                  <div class="panel panel-primary">
                      <div class="panel-heading">
                          Chủ đề 1
                      </div>
                      <div class="panel-body">
                          <p>Thực tập tốt nghiệp</p>
                      </div>
                      <div class="panel-footer">
                          <a href="giang-vien/chi-tiet-thao-luan/1">Xem chi tiết</a>
                      </div>
                  </div>
                </div>


                <div class="panel" >
                  <div class="panel panel-danger">
                      <div class="panel-heading">
                          Chủ đề 2
                      </div>
                      <div class="panel-body">
                          <p>Thực tập tốt nghiệp</p>
                      </div>
                      <div class="panel-footer">
                          <a href="giang-vien/chi-tiet-thao-luan/1">Xem chi tiết</a>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6">
                
                <div class="panel" >
                  <div class="panel panel-warning">
                      <div class="panel-heading">
                          Chủ đề 4
                      </div>
                      <div class="panel-body">
                          <p>Thực tập tốt nghiệp</p>
                      </div>
                      <div class="panel-footer">
                          <a href="giang-vien/chi-tiet-thao-luan1">Xem chi tiết</a>
                      </div>
                  </div>
                </div>

                  
                  <div class="panel" >
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Chủ đề 3
                        </div>
                        <div class="panel-body">
                            <p>Thực tập tốt nghiệp</p>
                        </div>
                        <div class="panel-footer">
                            <a href="giang-vien/chi-tiet-thao-luan/1">Xem chi tiết</a>
                        </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
                </div>

                       <!-- /. ROW  -->
        </div>


  </div>
</div>

@endsection





@section('script')
<script type="text/javascript">
$("[data-toggle=tooltip]").tooltip();
</script>
@endsection