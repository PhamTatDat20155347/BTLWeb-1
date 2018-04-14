        
@extends('admin.layout.index')
@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">User
                    <small>{{$user->username}}</small>
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
                <form action="admin/user/sua/{{$user->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label>Tên đăng nhập</label>
                        <input class="form-control" name="username" value={{$user->username}}  required="" />
                    </div>
                    <div class="form-group">
                        <input type="checkbox" id="changePassword" name="changePassword" >
                        <label>Đổi mật khẩu</label>
                        <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">

                        <label>Nhập lại Password</label>
                        <input type="password" class="form-control password" name="passwordAgain" placeholder="Nhập lại mật khẩu" disabled="" />
                    </div>
                    <div class="form-group">
                        <label>Họ và tên</label>
                        <input  class="form-control" name="fullname" value="{{$user->fullname}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Giới Tính</label>
                        <label class="radio-inline">
                            <input name="gender" value="0" checked="" type="radio"
                            @if($user->gender==0)
                            {{'checked'}}
                            @endif
                            >Nam
                        </label>
                        <label class="radio-inline">
                            <input name="gender" value="1" type="radio"
                            @if($user->gender==1)
                            {{'checked'}}
                            @endif
                            >Nữ
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="2"
                            @if($user->gender==2)
                            {{'checked'}}
                            @endif
                            >Giới tính khác
                        </label>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value={{$user->email}} required="" />
                    </div>
                    <div class="form-group">
                        <label>Điện thoại</label>
                        <input type="number" class="form-control" name="phone" value="{{$user->phone}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Địa chỉ</label>
                        <input class="form-control" name="address" value="{{$user->address}}" required="" />
                    </div>
                    <div class="form-group">
                        <label>Quyền</label>
                        <input type="text" readonly="" class="form-control" name="quyen" value="{{$user->quyen}}" />
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
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
        @section('script')
        <script type="text/javascript">
            $(document).ready(function(){
                $("#changePassword").change(function(){
                    if($(this).is(":checked")){
                        $(".password").removeAttr('disabled');
                    }else{
                        $(".password").attr('disabled','');
                    }
                });
            });
        </script>
        @endsection