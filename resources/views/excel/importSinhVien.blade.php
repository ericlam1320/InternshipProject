
@extends('layout.master_giangvien')

@section ('title','Quản Lý Sinh Viên - Import')

@section('menu-trangchu', 'menu-top-active')

@section('content')



<div class="content-wrapper">
	<div class="container">

		<div class="content-wrapper">
			<div class="container">
				<div class="row pad-botm">
					<div class="col-md-12">
						<h4 class="header-line">Quản Lý Sinh Viên</h4>   
					</div>
				</div>

				@if(session('error'))
				<div class="my_alert alert alert-danger">{{ session('error') }}</div>
				@endif


				<div class="row pad-botm">
					<div class="col-md-12 form-import-file">
						<label for="">Chọn file excel cần import</label>
						<form action="giang-vien/quan-ly-sinh-vien/import" method="POST" enctype="multipart/form-data">
							<input type="hidden" name="_token" value="{{ csrf_token() }}" required>
							<div class="col-md-4">
								<input type="file" name="sinhvien" id="file" class="inputfile form-control"/>
							</div>
							<button type="submit" class="btn btn-success">Import</button>	
						</form>

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
		</script>
		@stop