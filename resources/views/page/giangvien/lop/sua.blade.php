@extends('layout.master')

@section('menu-quanly','menu-top-active')

@section ('title','Quản Lý')

@section('content')

<div class="content-wrapper">
 <div class="container">

  <div class="row pad-botm">
    <div class="col-md-12">
      <h4 class="header-line">Cập nhật Lớp Học</h4>
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
  <div class="col-md-6 col-sm-6 col-xs-12">
   <div class="panel panel-info">
    <div class="panel-heading">
      Form cập nhật
        @if(count($errors) > 0)                       
            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
        @endif
   </div>
   <div class="panel-body" >
    <form role="form" method="POST" action="giang-vien/quan-ly-lop/sua/{{$lop->id}}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
        <label>ID lớp</label>
        <input class="form-control" type="text" name="idlop" value="{{$lop->id}}" readonly="false" />
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label>Tên lớp</label>
        <input class="form-control" type="text" name="tenlop" value="{{$lop->TenLop}}" />
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label>Số lượng sinh viên</label>
        <input class="form-control" type="text" name="soluongsv" value="{{$lop->SoLuongSV}}" />
        <p class="help-block"></p>
      </div>
      <div class="form-group">
        <label>Chọn giảng viên</label>
        <select class="form-control" name="giangvien">
            @foreach($giangvien as $gv)
            <option @if($gv->id == $lop->MaGV) {{ 'selected' }} @endif value="{{$gv->id}}"> {{$gv->HoTen}}</option>
            @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-info">Cập nhật</button>

    </form>
  </div>
</div>
</div>

 <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                            Yêu cầu gần đây
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Tên Lớp</th>
                                            <th>Số lượng SV</th>
                                            <th>Tên GV</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>1</td>
                                            <td>Thi Trường Minh</td>
                                            <td>DH51400704</td>
                                            <td>Đã duyệt</td>
                                        </tr>
                                        <tr class="info">
                                            <td>2</td>
                                            <td>Vương Anh Kho</td>
                                            <td>DH51400553</td>
                                            <td>Chưa duyệt</td>
                                        </tr>
                                        <tr class="warning">
                                            <td>3</td>
                                            <td>Nguyễn Chung Tú</td>
                                            <td>DH51400553</td>
                                            <td>Đã duyệt</td>
                                        </tr>
                                        <tr class="danger">
                                            <td>4</td>
                                            <td>Thái Kim Thanh</td>
                                            <td>DH51400553</td>
                                            <td>Chưa duyệt</td>
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

@endsection