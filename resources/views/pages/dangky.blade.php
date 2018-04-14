<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Đăng ký</title>
    <script src="dn_dk/js/jquery.min.js"></script>
    <!-- Custom Theme files -->
    <link href="dn_dk/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- for-mobile-apps -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <meta name="keywords" content="Classy Login form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //for-mobile-apps -->
    <!--Google Fonts-->
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="header">
        <div class="header-main"  style=" margin-left: 100px;">
           <h1>Đăng ký</h1>
           <div class="header-bottom">
            <div class="header-right w3agile">
                <div class="header-left-bottom agileinfo">
                    @if(count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $err)
                        {{$err}}<br>
                        @endforeach
                    </div>
                    <br>
                    @endif
                    @if(session('thongbao'))
                    <div class="alert alert-success" style="color: #FFFFFF;">
                        {{session('thongbao')}}
                    </div>
                    <br>
                    @endif
                    @if(session('loi'))
                    <div class="alert alert-danger">
                        {{session('loi')}}
                    </div>
                    <br>
                    @endif
{{--                     <form action="dangky" method="post">
                        <input required="" type="hidden" name="_token" value="{{csrf_token()}}"> --}}
                        <div style="float: left;">
                            <input class="" type="text"  value="Username" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Username';}"/>
                            <input type="text"  value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
                            <input type="password"  placeholder="Mật khẩu" name="password" />
                            <input type="password"  placeholder="Nhập lại mật khẩu" name="passwordAgain" />
                            <input type="text"  value="Họ và tên" name="fullname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Họ và tên';}"/>
                            <div>
                                <label style="color: #FFFFFF;">Giới Tính</label>
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
                            <input type="text"  value="Điện thoại" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"/>
                            <input type="text"  value="Địa chỉ" name="address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Địa chỉ';}"/>
                            <input type="submit" value="Đăng ký">
                        </div>
                        <div style="float: right;">
                        <h1>Hồ sơ cá nhân</h1>
                            <input required="" type="hidden" name="_token" value="{{csrf_token()}}">
                            <input class="cainay" type="text"  value="Họ và tên" name="fullname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Họ và tên';}"/>
                            <div>
                                <label style="color: #FFFFFF;">Giới Tính</label>
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
                            <input type="text"  value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
                            <input type="text"  value="Phone" name="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Số điện thoại';}"/>
                            <input type="text"  value="Birthday" name="birthday" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Birthday';}"/>
                            <input type="text"  value="Ngành nghề muốn ứng tuyển" name="job_position" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Ngành nghề muốn ứng tuyển';}"/>
                            <input type="text"  value="Thông tin" name="infomation" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Thông tin';}"/>
                            <input type="text"  value="Học vấn" name="education" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Học vấn';}"/>
                            <input type="text"  value="Kĩ năng" name="skill" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'kĩ năng';}"/>
                            <input type="text"  value="Kinh nghiệm" name="experience" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Kinh nghiệm';}"/>
                            <input type="text"  value="Dự án" name="project" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Dự án';}"/>
                            <input type="text"  value="Tình trạng" name="status" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tình trạng';}"/>
                        </div>
{{--                     </form> --}}
                </div>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>