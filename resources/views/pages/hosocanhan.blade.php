    @extends('layout.index1')
    @section('content')
    <!-- Page Content -->
    <div class="container" style="color: #070707;">

        <!-- slider -->
        <div class="row carousel-holder">
            <div class="col-md-2">
                <span>Quản lí hồ sơ</span>
                <p>Phạm Tất Đạt</p>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading"><h3 align="center">Thông tin cá nhân</h3></div>
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
                        <form action="hosocanhan" method="post">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div>
                                <label>Tên đăng nhập</label>
                                <input required="" value="{{Auth::user()->username}}" type="text" class="form-control" placeholder="Username" name="username" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Email</label>
                                <input required="" value="{{Auth::user()->email}}" readonly="" type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1"
                                disabled
                                >
                            </div>
                            <br>    
                            <div>
                                <input type="checkbox" class="" name="checkpassword" id="changePassword">
                                <label>Đổi mật khẩu</label>
                                <input required="" type="password" class="form-control password" name="password" id="password" aria-describedby="basic-addon1" disabled="">
                            </div>
                            <br>
                            <div>
                                <label>Nhập lại mật khẩu</label>
                                <input required="" type="password" class="form-control password" name="passwordAgain" id="passwordAgain" aria-describedby="basic-addon1" disabled="">
                            </div>
                            <br>
                            <div>
                                <label>Họ và tên</label>
                                <input required="" value="{{Auth::user()->fullname}}" type="text" class="form-control" placeholder="Fullname" name="fullname" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Giới tính</label>
                                <input value="@if(Auth::user()->gender==0){{"Nam"}}
                                @elseif(Auth::user()->gender == 1){{"Nữ"}}
                                @else {{"Khác"}}
                                @endif 
                                " type="text" class="form-control" placeholder="" name="gender" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Điện thoại</label>
                                <input required="" value="{{Auth::user()->phone}}" type="text" class="form-control" placeholder="phone" name="phone" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <div>
                                <label>Địa chỉ</label>
                                <input required="" value="{{Auth::user()->address}}" type="text" class="form-control" placeholder="address" name="address" aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" class="btn btn-default" style=" size: 250px; color: #fffff ;border-radius: 10px; border: 1px solid #E41B3C; background-color: #E41B3C;">Sửa
                            </button>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
            </div>
        </div>
        <!-- end slide -->
    </div>
    <!-- end Page Content -->
    @endsection
    @section('script')
    <script type="text/javascript">
        var check = document.getElementById('changePassword');
        var pass = document.getElementById('password');
        var passAgain = document.getElementById('passwordAgain');

        check.addEventListener('change',function(){
            if(check.checked==true){
                pass.disabled = false;
                passAgain.disabled = false;
            }else{
                pass.disabled = true;
                pass.value='';
                passAgain.value='';
                passAgain.disabled = true;
            }

        });
    </script>
    @endsection