        
@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>Thêm</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}<br>
                    @endforeach
                </div>
                @endif
                @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif
                @if(session('loi'))
                <div class="alert alert-danger">
                    {{session('loi')}}
                </div>
                @endif
                <form action="admin/user/them" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="username" placeholder="nhập tên" required="" />
                    </div>
                    <div class="form-group">
                        <label>Mật khẩu</label>
                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required="" />
                    </div>
                    <div class="form-group">
                        <label>Nhập lại mật khẩu</label>
                        <input type="password" class="form-control" name="passwordAgain" placeholder="Nhập lại mật khẩu" required="" />
                    </div>
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input  class="form-control" name="fullname" placeholder="nhập fullname" required="" />
                    </div>
                    <div class="form-group">
                        <label>Giới Tính</label>
                        <label class="radio-inline">
                            <input name="gender" value="0" checked="" type="radio">Nam
                        </label>
                        <label class="radio-inline">
                            <input name="gender" value="1" type="radio">Nữ
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="2">Khác
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" placeholder="nhập email" required="" />
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="number" class="form-control" name="phone" placeholder="nhập phone" required="" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="address" placeholder="nhập address" required="" />
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <input type="text" class="form-control" name="quyen" placeholder="quyền" required="" />
                    </div>
                    <button type="submit" class="btn btn-default">Thêm</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @endsection