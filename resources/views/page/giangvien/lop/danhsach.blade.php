@extends('layout.master_giangvien')

@section ('title','Quản Lý Lớp')

@section('menu-quanly', 'menu-top-active')

@section('content')

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
                <h4 class="header-line">Quản Lý Lớp</h4>   
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                         Danh sách Lớp
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
                                        <th>Mã Lớp</th>
                                        <th>Tên Lớp</th>
                                        <th>Số Lượng SV</th>
                                        <th>Tên Giảng Viên</th>
                                        <th class="text-center">Thao tác <a href="giang-vien/quan-ly-lop/them">Thêm</a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $stt = 1; ?>
                                    @foreach ($lophoc as $lop)
                                    <tr class="odd gradeX">
                                        <td>{{$stt}}</td>
                                        <td>{{$lop->MaLop}}</td>
                                        <td>{{$lop->TenLop}}</td>
                                        <td>{{$lop->SoLuongSV}}</td>
                                        <td>{{ ($lop->GiangVien->HoTen) }}
                                        <th class="text-center"><a href="giang-vien/quan-ly-lop/sua/{{$lop->MaLop}}">Sửa</a> | <a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="giang-vien/quan-ly-lop/xoa/{{$lop->MaLop}}">Xóa</a></th>
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