<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>Classy Login form Widget Flat Responsive Widget Template :: w3layouts</title>
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
        <div class="header-main">
           <h1>Đăng nhập</h1>
           <div class="header-bottom">
                <div class="header-right w3agile">
                    <div class="header-left-bottom agileinfo">
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
                        <form action="dangnhap" method="post">
                            <input required="" type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="text"  value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"/>
                            <input type="password"  value="Password" name="password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'password';}"/>
                            <div class="remember">
                             <span class="checkbox1">
                               <label class="checkbox"><input type="checkbox" name="" checked=""><i> </i>Remember me</label>
                           </span>
                           <div class="clear"> </div>
                       </div>

                       <input type="submit" value="Đăng nhập">
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>