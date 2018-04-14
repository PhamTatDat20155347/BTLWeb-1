<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="author" content="Jobboard">

  <title>VietNam Job</title>    

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">    
  <link rel="stylesheet" href="css/jasny-bootstrap.min.css" type="text/css">  
  <link rel="stylesheet" href="css/bootstrap-select.min.css" type="text/css">  
  <!-- Material CSS -->
  <link rel="stylesheet" href="css/material-kit.css" type="text/css">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="fonts/font-awesome.min.css" type="text/css"> 
  <link rel="stylesheet" href="fonts/themify-icons.css"> 

  <!-- Animate CSS -->
  <link rel="stylesheet" href="extras/animate.css" type="text/css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="extras/owl.carousel.css" type="text/css">
  <link rel="stylesheet" href="extras/owl.theme.css" type="text/css">
  <!-- Rev Slider CSS -->
  <link rel="stylesheet" href="extras/settings.css" type="text/css"> 
  <!-- Slicknav js -->
  <link rel="stylesheet" href="css/slicknav.css" type="text/css">
  <!-- Main Styles -->
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <!-- Responsive CSS Styles -->
  <link rel="stylesheet" href="css/responsive.css" type="text/css">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" href="css/custom-components.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" media="screen" />
<base href="{{asset('')}}">
  <!-- Custom CSS -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/my.css" rel="stylesheet">
  @yield('css')

  <body>
      @include('layout.slide')

      <!-- Page Content -->
      @yield('content')
      <!-- end Page Content -->

      <!-- Footer -->
      @include('layout.footer')
      <!-- end Footer -->
      <!-- jQuery -->

      <!-- Bootstrap Core JavaScript -->
      <!-- Main JS  -->
          <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/my.js"></script>
      <script type="text/javascript" src="js/jquery-min.js"></script>      
      <script type="text/javascript" src="js/bootstrap.min.js"></script>    
      <script type="text/javascript" src="js/material.min.js"></script>
      <script type="text/javascript" src="js/material-kit.js"></script>
      <script type="text/javascript" src="js/jquery.parallax.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/jquery.slicknav.js"></script>
      <script type="text/javascript" src="js/main.js"></script>
      <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
      <script type="text/javascript" src="js/waypoints.min.js"></script>
      <script type="text/javascript" src="js/jasny-bootstrap.min.js"></script>
      <script type="text/javascript" src="js/bootstrap-select.min.js"></script>
      <script type="text/javascript" src="js/form-validator.min.js"></script>
      <script type="text/javascript" src="js/contact-form-script.js"></script>    
      <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
      <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>

      @yield('script')

    </body>

    </html>