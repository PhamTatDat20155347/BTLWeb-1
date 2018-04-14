@extends('layout.index1')
@section('content')
<!-- Page Content -->
<br>
<div class="" style="color: #070707; height: 400px; width: 500px; float: left;">
    <div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
               <div class="panel-heading"><h2 align="center">Đăng ký tài khoản</h2></div>
                    <div class="panel-body">
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
                        <form action="dangky" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div>
                                <label>Tên đăng nhập</label>
                                <input required="" type="text" class="form-control" placeholder="Username" name="username" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                               <label>Email</label>
                               <input required="" type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                               >
                            </div>
                           <br>	
                           <div>
                               <label>Nhập mật khẩu</label>
                               <input required="" type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                           </div>
                           <br>
                           <div>
                               <label>Nhập lại mật khẩu</label>
                               <input required="" type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                           </div>
                            <div>
                                <label>Họ và tên</label>
                                <input type="text"  class="form-control" name="fullname" placeholder="nhập fullname" required="" aria-describedby="basic-addon1"/>
                            </div>
                            <div>
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
                            <br>
                            <div>
                                <label>Điện thoại</label>
                                <input type="number" class="form-control" name="phone" placeholder="nhập phone" required="" aria-describedby="basic-addon1" />
                            </div>
                            <div>
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" placeholder="nhập address" required="" aria-describedby="basic-addon1" />
                            </div>
                            <br>
                            <button type="submit" class="btn btn-default" style="color: #fffff ;border-radius: 10px; border: 1px solid #E41B3C; background-color: #E41B3C;">Đăng ký
                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</div>
<div class="" style="color: #070707; height: 400px;width: 500px;">
    <div class="row carousel-holder">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
               <div class="panel-heading"><h2 align="center">Đăng ký tài khoản</h2></div>
                    <div class="panel-body">
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
                        <form action="dangky" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div>
                                <label>Tên đăng nhập</label>
                                <input required="" type="text" class="form-control" placeholder="Username" name="username" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                               <label>Email</label>
                               <input required="" type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                               >
                            </div>
                           <br> 
                           <div>
                               <label>Nhập mật khẩu</label>
                               <input required="" type="password" class="form-control" name="password" aria-describedby="basic-addon1">
                           </div>
                           <br>
                           <div>
                               <label>Nhập lại mật khẩu</label>
                               <input required="" type="password" class="form-control" name="passwordAgain" aria-describedby="basic-addon1">
                           </div>
                            <div>
                                <label>Họ và tên</label>
                                <input type="text"  class="form-control" name="fullname" placeholder="nhập fullname" required="" aria-describedby="basic-addon1"/>
                            </div>
                            <div>
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
                            <br>
                            <div>
                                <label>Điện thoại</label>
                                <input type="number" class="form-control" name="phone" placeholder="nhập phone" required="" aria-describedby="basic-addon1" />
                            </div>
                            <div>
                                <label>Địa chỉ</label>
                                <input class="form-control" name="address" placeholder="nhập address" required="" aria-describedby="basic-addon1" />
                            </div>
                            <br>
                            <button type="submit" class="btn btn-default" style="color: #fffff ;border-radius: 10px; border: 1px solid #E41B3C; background-color: #E41B3C;">Đăng ký
                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
    </div>
</div>
@endsection