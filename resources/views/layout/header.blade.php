    <!-- Header Section Start -->
    <section id="intro" class="section-intro">
      <div class="logo-menu">
        <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand logo" href="index"><img class="" src="img/logo1.png" alt="Vietnamworks - Job Search, career and employment in Vietnam" title="Vietnamworks - Job Search, career and employment in Vietnam" height="40px"></a>
            </div>

            <div class="collapse navbar-collapse" id="navbar">              
              <!-- Start Navigation List -->
              <ul class="nav navbar-nav">
                <li>
                  <a class="active" href="trangchu">
                    Trang chủ <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a class="active" href="index.html">
                        Tất cả việc làm
                      </a>
                    </li>
                    <li>
                      <a class="active" href="index.html">
                        Đăng tuyển
                      </a>
                    </li>
                  </ul>
                </li>
{{--                 <li>
                  <a href="about.html">
                    Tất Cả Việc Làm <i class="fa fa-angle"></i>
                  </a>
                </li> --}}
                <li>
                  <a href="#">
                    Công Ty <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown">
                    <li>
                      <a class="active" href="index.html">
                        FPT
                      </a>
                    </li>
                    <li>
                      <a class="active" href="index.html">
                        Quất Lâm
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="gioithieu">
                    Giới thiệu <i class="fa fa-angle"></i>
                  </a>
                </li>
                <li>
                  <a href="lienhe">
                    Tư vấn <i class="fa fa-angle"></i>
                  </a>
                </li>
              </ul>
              <ul class="nav navbar-nav navbar-right float-right">
                <li>
                  <a class="alert-notifications notifications dd" href="#" data-original-title="" title="">
                    <i class="fa fa-bell"></i>
                    <span id="no-of-notifications" style="display:none" class="number"></span>
                  </a>
                </li>
                @if(!Auth::user())
                <li class="left"><a href="dangkyntd"><i class="ti-lock"></i>Đăng ký Recruiter</a></li>
                <li class="right"><a href="dangky"><i class="ti-lock"></i>Đăng ký</a></li>
                <li class="right"><a href="dangnhap"><i class="ti-lock"></i>Đăng nhập</a></li>       
                @else
                {{-- <li class="right"><a href="hosocanhan"><i class="ti-user"></i>  {{Auth::user()->username}}</a></li> --}}
                <li class="dropdown dropdown-popover-theme user-account dropdown-with-icon">
                  <li class="right"><a href="hosocanhan"><i class="ti-user"></i>  {{Auth::user()->username}}</a>
                    <ul class="dropdown-menu animated fadeIn" style="background-color: #414141; width: 250px;">
                      <li class="menu-header">
                        Quản Lý Nghề Nghiệp
                      </li>
                      <li>
                        <?php $cv= Auth::user()->cv; ?>
                        <a href="hosoxinviec/{{$cv->id}}">
                          <i class="fa fa-fw fa-lg fa-tachometer"></i>
                          Quản Lý Hồ Sơ
                        </a>
                      </li>
                      <li>
                        <a href="/quan-ly-nghe-nghiep/viec-lam-cua-toi">
                          <i class="fa fa-fw fa-lg fa-heart"></i>
                          Việc Làm Của Tôi
                        </a>
                      </li>
                      <li>
                        <a href="/quan-ly-nghe-nghiep/thong-bao-viec-lam">
                          <i class="fa fa-fw fa-lg fa-envelope"></i>
                          Thông Báo Việc Làm
                        </a>
                      </li>
                      <li class="with-separator">
                        <a class="no-icon" href="hosocanhan">
                          Tài Khoản
                        </a>
                      </li>
                      <li>
                        <a class="no-icon" href="dangxuat">
                          Thoát
                        </a>
                      </li>
                    </ul>
                  </li>
                  @endif
                </ul>
              </div> 
            </div>
          </nav>
        </div>
        <!-- Header Section End -->    

        <!-- Tìm việc -->
        <div class="search-container">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h1>Tìm Công Việc Ước Mơ</h1><br><h2>NÂNG BƯỚC THÀNH CÔNG</h2>
                <div class="content">
                  <form method="" action="">
                    <div class="row">
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="text" placeholder="Nhập chức danh, vị trí, kỹ năng...">
                          <i class="ti-time"></i>
                        </div>
                      </div>
                      <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                          <input class="form-control" type="email" placeholder="Nhập địa điểm">
                          <i class="ti-location-pin"></i>
                        </div>
                      </div>
                      <div class="col-md-3 col-sm-6">
                        <div class="search-category-container">
                          <label class="styled-select">
                            <select class="dropdown-product selectpicker">
                              <option>Tất cả ngành nghề</option>
                              <option>IT & Engineering</option>
                            </select>
                          </label>
                        </div>
                      </div>
                      <div class="col-md-1 col-sm-6">
                        <button type="button" class="btn btn-search-icon"><i class="ti-search"></i></button>
                      </div>
                    </div>
                  </form>
                  <div class="upload-resume-wrapper search-widget__upload hidden-xs">
                    <form id="upload-resume" method="post" enctype="multipart/form-data" action="https://www.vietnamworks.com/jobseekers/profile_ajax.php?action=uploadAttachFile">
                      <p class="text-center m-t-sm m-b-n-sm" style="color: #FFFFFF; ">
                        <label class="upload-resume relative m-b-none">
                          <a class="text-white" onclick="ghHandleShowLoginModal('/ho-so');">Đăng tải hồ sơ của bạn</a>
                        </label>
                      </p>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end tìm kiếm -->

      </section>
      <!-- End Header -->