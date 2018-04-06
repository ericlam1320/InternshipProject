@extends('layout.master')

@section ('title','Quản Lý Môn Học')

@section('menu-quanly', 'menu-top-active')

@section('content')

@can('giang_vien')

<div class="content-wrapper">
 <div class="container">

  <!-- <div class="row pad-botm">
    <div class="col-md-12">
      <h4 class="header-line">Giảng Viên</h4>
    </div>
  </div> -->

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

<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Quản Lý Môn Học</h4>   
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Danh sách Môn Học
                         @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã Môn</th>
                                        <th>Tên Môn</th>
                                        <th>Học Kỳ</th>
                                        <th>Số Tín Chỉ</th>
                                        <th class="text-center">Thao tác <a href="giang-vien/quan-ly-mon-hoc/them">Thêm</a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $stt = 1; ?>
                                    @foreach($monhoc as $mon)
                                    <tr class="odd gradeX">
                                        <td>{{$stt}}</td>
                                        <td>{{$mon->MaMon}}</td>
                                        <td>{{$mon->TenMon}}</td>
                                        <td>{{$mon->HocKy}}</td>
                                        <td>{{$mon->SoTinChi}}</td>
                                        <th class="text-center"><a href="giang-vien/quan-ly-mon-hoc/sua/{{$mon->MaMon}}">Sửa</a> | <a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="giang-vien/quan-ly-mon-hoc/xoa/{{$mon->MaMon}}">Xóa</a></th>
                                    </tr>
                                    <?php $stt++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        
                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>                     
    </div>
</div>
@endcan

@endsection

@section('script')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
    function XacNhanXoa(message){
            if(window.confirm(message)){
                return true;
            }
            return false;
        }

</script>
@endsection