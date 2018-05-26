@extends('layout.master_giangvien')

@section ('title','Quản Lý Sinh Viên')

@section('menu-quanly', 'menu-top-active')

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
        <h3>{{ Auth::guard('giangvien')->user()->HoTen }}</h3>
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

            <div class="row pad-botm">
                <div class="col-md-12">
                    <a href="giang-vien/quan-ly-sinh-vien/them" class="btn btn-danger">Thêm sinh viên</a>
                    <a href="{{ route('getImport') }}" class="btn btn-success">Import</a>
                    <a href="{{ route('getExport') }}" class="btn btn-info">Export</a>
                </div>
            </div>

            @if(session('error'))
            <div class="my_alert alert alert-danger">{{ session('error') }}</div>
            @elseif(session('success'))
            <div class="my_alert alert alert-success">{{ session('success') }}</div>
            @endif

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Danh sách sinh viên
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Mã SV</th>
                                        <th>Lớp học</th>
                                        <th>Họ Tên</th>
                                        <th>Email</th>
                                        <th>Ngày Sinh</th>
                                        <th>Giới Tính</th>
                                        <th>Địa Chỉ</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @foreach($sinhvien as $sv)
                                    <tr class="gradeA">
                                        <td>{{ $sv->id }}</td>
                                        <td>{{ $sv->lophoc->TenLop }}</td>
                                        <td>{{ $sv->HoTen }}</td>
                                        <td>{{ $sv->email }}</td>
                                        <td>{{date('d/m/Y', strtotime($sv->NgaySinh))}}</td>
                                        <td>{{ ($sv->GioiTinh == 1) ? 'Nam' : 'Nữ' }}</td>
                                        <td>{{ $sv->DiaChi }}</td>
                                        <td><a href="giang-vien/quan-ly-sinh-vien/sua/{{$sv->id}}">Sửa</a> | <a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="giang-vien/quan-ly-sinh-vien/xoa/{{$sv->id}}">Xóa</a></td>
                                    </tr>
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

@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('.my_alert').delay(4000).slideUp();
    });

    function XacNhanXoa(message){
        if(window.confirm(message)){
            return true;
        }
        return false;
    }
</script>
@stop