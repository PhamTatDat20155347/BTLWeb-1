@extends('layout.index')
@section('content')
<!-- Công ty hàng đầu -->
<section class="bnrs container home__featured-companies">
  <div id="ads_TOP_COMPANIES_HORISONTAL" class="row">
    <h1 align="center" style="padding: 50px;">Các Công ty lon nhat</h1>
    <div class="animated fadeIn">

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="//www.vietnamworks.com/tim-viec-lam/nha-tuyen-dung/-4326085/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=4326085&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/88x43-T_102007.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">Perfect Your English</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="//www.vietnamworks.com/tim-viec-lam/nha-tuyen-dung/-698582/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=698582&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/canon_fe_88x43_3_100991.png" width="88" height="43">

          </div>
          <span class="ad-slogan">CANON</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="http://panasonic.vietnamworks.com/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=387276&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/panasonic-vip_2_100005.jpg" width="88" height="43">
            <span class="new-job-tag flex-center-xy">Việc mới</span>
          </div>
          <span class="ad-slogan">Panasonic Vietnam Group</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="http://topit.vietnamworks.com/companies/company/FPT-Software/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=529938&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/88x43-FPT_100004.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">FPT SOFTWARE</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6">
        <a class="single-bnr" target="_blank" href="http://topit.vietnamworks.com/companies/company/Evolable-Asia/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=26652&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/logo1_101809.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">EVOLABLE ASIA</span>
        </a>
      </div>

      <div class="col-md-2 col-sm-4 col-xs-6" style="padding-bottom: 50px;">
        <a class="single-bnr" target="_blank" href="http://pyco.vietnamworks.com/vi/?utm_source=vnw_homepage&amp;utm_medium=viplogo&amp;utm_campaign=3189099&amp;utm_term=VB">
          <div class="logo-box flex-center-y">
            <img class="salesLogoImage" src="img/logo-Pyco-88x43_102572.jpg" width="88" height="43">

          </div>
          <span class="ad-slogan">Tuyển 100 Senior Developers</span>
        </a>
      </div>

    </div>
  </div>
</section>
<!-- Hot Job -->
<section class="find-job section">
  <div class="container">
    <h2 class="section-title">Hot Jobs</h2>
    <div class="row">
      <div class="col-md-12">
        <div class="job-list">
          <div class="thumb">
            <a href="job-details.html"><img src="img/jobs/img-1.jpg" alt=""></a>
          </div>
          <div class="job-list-content">
            <h4><a href="job-details.html">Thiết kế website tìm việc làm</a><span class="full-time">Full-Time</span></h4>
            <p>Chỉ cần đẹp trai, xinh gái</p>
            <div class="job-tag">
              <div class="pull-left">
                <div class="meta-tag">
                  <span><a href="browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                  <span><i class="ti-location-pin"></i>Quất Lấm, Nam Định</span>
                  <span><i class="ti-time"></i>60/Hour</span>
                </div>
              </div>
              <div class="pull-right">
                <div class="icon">
                  <i class="ti-heart"></i>
                </div>
                <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <div class="showing pull-left">
          <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
        </div>                    
        <ul class="pagination pull-right">              
          <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
</section>
@endsection
      <!-- End hot Job -->