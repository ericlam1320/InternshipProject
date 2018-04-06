@extends('layout.master')

@section ('title','Quản Lý Sinh Viên')

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
                <h4 class="header-line">Quản Lý Sinh Viên</h4>   
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Danh sách Sinh Viên
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
                                        <th>Mã SV</th>
                                        <th>Tên SV</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <td>Lớp</td>
                                        <th>Email</th>
                                        <th>Địa Chỉ</th>
                                        <th class="text-center">Thao tác <a href="giang-vien/quan-ly-sinh-vien/them">Thêm</a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $stt = 1; ?>
                                    @foreach($sinhvien as $sv)
                                    <tr class="odd gradeX">
                                        <td>{{$stt}}</td>
                                        <td>{{$sv->id}}</td>
                                        <td>{{$sv->HoTen}}</td>
                                        <td>{{date('d/m/Y', strtotime($sv->NgaySinh))}}</td>
                                        <td>{{$sv->GioiTinh}}</td>
                                        <td>{{($sv->LopHoc->TenLop)}}</td>
                                        <td>{{$sv->email}}</td>
                                        <td>{{$sv->DiaChi}}</td>
                                        <th class="text-center"><a href="giang-vien/quan-ly-sinh-vien/sua/{{$sv->id}}">Sửa</a> | <a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="giang-vien/quan-ly-sinh-vien/xoa/{{$sv->id}}">Xóa</a></th>
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