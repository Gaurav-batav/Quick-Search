<?php include('header.php');?>
  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-md">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="dashboard.php" class="items-center"><i class="flaticon-discovery mr15"></i>Dashboard</a>
          </div>
          <div class="sidebar_list_item ">
            <!--<a href="page-dashboard-message.html" class="items-center"><i class="flaticon-chat-1 mr15"></i>Message</a>-->
          </div>
          <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
          <div class="sidebar_list_item ">
            <a href="add-property.php" class="items-center "><i class="flaticon-new-tab mr15"></i>My Business Profile</a>
          </div>
          
          <div class="sidebar_list_item ">
            <a href="enquiry.php" class="items-center"><i class="flaticon-like mr15"></i>Enquiry</a>
          </div>
          <div class="sidebar_list_item ">
            <!--<a href="page-dashboard-savesearch.html" class="items-center"><i class="flaticon-search-2 mr15"></i>Saved Search</a>-->
          </div>
          
          <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
          <div class="sidebar_list_item ">
            <a href="pakage.php" class="items-center -is-active"><i class="flaticon-protection mr15"></i>My Package</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="my-profile.php" class="items-center"><i class="flaticon-user mr15"></i>My Profile</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="../index.php" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
          </div>
        </div>
      </div>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content property-page bgc-f7">
          <div class="row pb40 d-block d-lg-none">
            <div class="col-lg-12">
              <div class="dashboard_navigationbar">
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                  <ul id="myDropdown" class="dropdown-content">
                    <li><a href="dashboard.php"><i class="flaticon-discovery mr10"></i>Dashboard</a></li>
                    <li><a href="page-dashboard-message.html"><i class="flaticon-chat-1 mr10"></i>Message</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE LISTINGS</p></li>
                    <li class="active"><a href="page-dashboard-add-property.html"><i class="flaticon-new-tab mr10"></i>Add New Property</a></li>
                    <li><a href="page-dashboard-properties.html"><i class="flaticon-home mr10"></i>My Properties</a></li>
                    <li><a href="page-dashboard-favorites.html"><i class="flaticon-like mr10"></i>My Favorites</a></li>
                    <li><a href="page-dashboard-savesearch.html"><i class="flaticon-search-2 mr10"></i>Saved Search</a></li>
                    <li><a href="review.php"><i class="flaticon-review mr10"></i>Reviews</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE ACCOUNT</p></li>
                    <li><a href="page-dashboard-package.html"><i class="flaticon-protection mr10"></i>My Package</a></li>
                    <li><a href="page-dashboard-profile.html"><i class="flaticon-user mr10"></i>My Profile</a></li>
                    <li><a class="" href="page-login.html"><i class="flaticon-exit mr10"></i>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row align-items-center pb40">
            <div class="col-lg-12">
              <div class="dashboard_title_area">
               <h2 class="title">Membership Plans</h2>
              <div class="breadcumb-list">
                <a href="#">Home</a>
                <a href="#">For Rent</a>
              </div>
              </div>
            </div>
          </div>
           <!-- Pricing Section Area -->
    <section class="our-pricing pb90 pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
          <!--<div class="col-lg-6 offset-lg-3">
            <div class="main-title text-center mb30">
              <h2>Membership Plans</h2>
              <p>Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
          </div>-->
        </div>
        <div class="row wow fadeInUp" data-wow-delay="200ms">
          <div class="col-lg-12">
            <div class="pricing_packages_top d-flex align-items-center justify-content-center mb60">
              <!--<div class="toggle-btn">
                <span class="pricing_save1 ff-heading">Billed Monthly</span>
                <label class="switch">
                  <input type="checkbox" id="checbox" onclick="check()"/>
                  <span class="pricing_table_switch_slide round"></span>
                </label>
                <span class="pricing_save2 ff-heading">Billed Yearly</span>
                <span class="pricing_save3">Save 20%</span>
              </div>-->
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <!--<div class="col-md-6 col-xl-4">
            <div class="pricing_packages">
              <div class="heading mb60">
                <h4 class="package_title">Basic</h4>
                <h1 class="text2">Free</h1>
                
                <p class="text">per year</p>
                <img class="price-icon" src="images/icon/pricing-icon-2.svg" alt="">
              </div>
              <div class="details">
                <p>Status : <span class="text-success"> Active</span></p>
                <p class="text mb35">Standard listing submission, active for 30 dayss</p>
                <div class="list-style1 mb40">
                  <ul>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>All Operating Supported</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Great Interface</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Allows encryption</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Face recognized system</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>24/7 Full support</li>
                  </ul>
                </div>
                <div class="d-grid">
                  <a href="invoice.php" class="ud-btn btn-thm-border text-thm">Download Invoice<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-xl-4">
            <div class="pricing_packages active">
              <div class="heading mb60">
                <h4 class="package_title">Professional</h4>
                <h1 class="text2">$199.95</h1>
               
                <p class="text">per year</p>
                <img class="price-icon" src="images/icon/pricing-icon-1.svg" alt="">
              </div>
              <div class="details">
                 <p>Status : <span class="text-success"> Active</span></p>
                <p class="text mb35">Standard listing submission, active for 30 dayss</p>
                <div class="list-style1 mb40">
                  <ul>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>All Operating Supported</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Great Interface</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Allows encryption</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Face recognized system</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>24/7 Full support</li>
                  </ul>
                </div>
                <div class="d-grid">
                  <a href="invoice.php" class="ud-btn btn-thm-border text-thm">Download Invoice<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>-->
          <div class="col-md-6 col-xl-4">
            <div class="pricing_packages">
              <div class="heading mb60">
                <h4 class="package_title">Business Listing</h4>
                <h1 class="text2">₹ 2999.00</h1>
               
                <p class="text">per year</p>
                <img class="price-icon" src="images/icon/pricing-icon-3.svg" alt="">
              </div>
              <div class="details">
                 <p>Status : <span class="text-success"> Active</span></p>
                <p class="text mb35">Validity : 1 Year </p>
                <div class="list-style1 mb40">
                  <ul>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>All Operating Supported</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Great Interface</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Allows encryption</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Face recognized system</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>24/7 Full support</li>
                  </ul>
                </div>
                <div class="d-grid">
                  <a href="invoice.php" class="ud-btn btn-thm-border text-thm" target="_blank">Download Invoice<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA --> 
    <section class="our-cta pt0">
      <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pb120 pt60-md pb60-md bdrs12 position-relative mx20-lg">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="images/about/element-1.png" alt="">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 wow fadeInLeft">
              <div class="cta-style1">
                <h2 class="cta-title">Need help? Talk to our expert.</h2>
                <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
              </div>
            </div>
            <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
              <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                <a href="#" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                <a href="#" class="ud-btn btn-dark"><span class="flaticon-call vam pe-2"></span>1234567891</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
        </div>
        <?php include('footer.php');?>