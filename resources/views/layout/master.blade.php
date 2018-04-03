@include('layout.script')
@include('layout.header')

@can('sinh_vien')
@include('layout.menu_sinhvien')
@elsecan('giang_vien')
@include('layout.menu_giangvien')
@endcan

@yield('content')
@include('layout.footer')