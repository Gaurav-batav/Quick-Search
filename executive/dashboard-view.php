<?php include('header.php');?>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo/fav.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo/logo.png" alt="" height="50" />
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo/fav.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo/logo.png" alt="" height="50" />
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>


        
       <div id="scrollbar">
                <div class="container-fluid">

                    <div id="two-column-menu">
                    </div>
                    <ul class="navbar-nav" id="navbar-nav">

                        <!--<li class="menu-title"><span data-key="t-menu">Menu</span></li>-->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="index.php">
                                <i class="ri-honour-line"></i> <span data-key="t-widgets">Dashboard</span>
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link menu-link" href="invoice-database.php">
                                <i class="ri-honour-line"></i> <span data-key="t-widgets">Invoice Dashboard</span>
                            </a>
                        </li>-->

                        <li class="menu-title"><span data-key="t-menu">All User Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Users</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="active-user.php" class="nav-link" data-key="t-analytics">Active Users </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="deactive-user.php" class="nav-link" data-key="t-crm"> Deactive Users</a>
                                    </li>
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">All Franchise</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="ri-rocket-line"></i> <span data-key="t-landing">Franchise</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLanding">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="active-franchise.php" class="nav-link" data-key="t-one-page"> Active Franchise </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="deactive-franchise.php" class="nav-link" data-key="t-nft-landing"> Deactive Franchise</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Profile Management</span></li>
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="active-profile.php">
                                <i class="ri-pages-line"></i> <span data-key="t-widgets">Active Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="deactive-profile.php">
                                <i class="ri-pages-line"></i> <span data-key="t-widgets">Deactive Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="pending-profile.php">
                                <i class="ri-pages-line"></i> <span data-key="t-widgets">Pending Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="free-profile.php">
                                <i class="ri-pages-line"></i> <span data-key="t-widgets">Free Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="renewal-profile.php">
                                <i class="ri-pages-line"></i> <span data-key="t-widgets">Renewal Profiles</span>
                            </a>
                        </li>
                      <!--  <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="ri-pages-line"></i> <span data-key="t-maps">All Profiles</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="invoice-listing.php" class="nav-link" data-key="t-google">
                                            Active Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="invoice-listing.php" class="nav-link" data-key="t-vector">
                                            Deactive Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="invoice-listing.php" class="nav-link" data-key="t-leaflet">
                                            Renewal Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="invoice-listing.php" class="nav-link" data-key="t-leaflet">
                                            Pending Profile
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="invoice-listing.php" class="nav-link" data-key="t-leaflet">
                                            Free Profile
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>-->


                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">settings</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#masters" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="ri-apps-2-line"></i> <span data-key="t-maps">Masters</span>
                            </a>
                            <div class="collapse menu-dropdown" id="masters">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="create-invoice.php" class="nav-link" data-key="t-google">
                                            City & Pincode
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Industries.php" class="nav-link" data-key="t-google">
                                           Industries
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sub-categories.php" class="nav-link" data-key="t-google">
                                            Sub-Industries 
                                        </a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><span data-key="t-menu">Ads Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#">
                                <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Ads</span>
                            </a>
                        </li>


                         <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Inquiry Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="inquiry.php">
                                <i class="ri-pages-line"></i> <span data-key="t-widgets">All Inquiries</span>
                            </a>
                        </li>

                        <li class="menu-title"><span data-key="t-menu">Logout</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="auth-logout-cover.php">
                                <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Logout</span>
                            </a>
                        </li>
                       
                        

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>





        <div class="sidebar-background"></div>
    </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Franchise Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Franchise Dashboard </a></li>
                                        <li class="breadcrumb-item active">Dashboard View</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                   <div class="row">
                        <div class="col">
                            <div class="h-100">
                                <div class="row mb-3 pb-1">
                                    <div class="col-12">
                                        <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                            <div class="flex-grow-1">
                                                <h4 class="fs-16 mb-1">This is our Fanchise Name</h4>
                                                <p class="text-muted mb-0">
                                                  Franchise Id : QSOFI4000103
                                                </p>
                                                
                                                <!-- <h3 class="text-muted mb-0">Franchise Id:<span>1234</span></h3>-->
                                            </div>
                                           
                                        </div>
                                        <!-- end card header -->
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->

                            </div>
                            <!-- end .h-100-->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->


                    <div class="row">
                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate bg-info">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-white mb-0">Total Active Profiles </p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <!--<h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +16.24 %
                                                        </h5>-->
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <!--ff-secondary-->
                                                        <h4 class="fs-22 fw-semibold text-white mb-4"><span class="counter-value" data-target="559.25">0</span></h4>
                                                        <a href="#" class="text-decoration-underline text-white-50">View net earnings</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-success-subtle rounded fs-3">
                                                            <i class="bx bx-dollar-circle text-success"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate bg-primary">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                     <p class="text-uppercase fw-medium text-white mb-0">total Deactive Profiles</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                       <!-- <h5 class="text-danger fs-14 mb-0">
                                                            <i class="ri-arrow-right-down-line fs-13 align-middle"></i> -3.57 %
                                                        </h5>-->
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold text-white mb-4"><span class="counter-value" data-target="36894">0</span></h4>
                                                        <a href="#" class="text-decoration-underline text-white-50">View all orders</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-info-subtle rounded fs-3">
                                                            <i class="bx bx-shopping-bag text-info"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate bg-success">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-white  mb-0">total Executives</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                       <!-- <h5 class="text-success fs-14 mb-0">
                                                            <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +29.08 %
                                                        </h5>-->
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold text-white mb-4"><span class="counter-value" data-target="183.35">0</span> </h4>
                                                        <a href="#" class="text-decoration-underline text-white-50">See details</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-warning-subtle rounded fs-3">
                                                            <i class="bx bx-user-circle text-warning"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->

                                    <div class="col-xl-3 col-md-6">
                                        <!-- card -->
                                        <div class="card card-animate bg-danger">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <p class="text-uppercase fw-medium text-white  mb-0"> Total Revenew</p>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                       <!-- <h5 class="text-muted fs-14 mb-0">
                                                            +0.00 %
                                                        </h5>-->
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-end justify-content-between mt-4">
                                                    <div>
                                                        <h4 class="fs-22 fw-semibold text-white mb-4"><span class="counter-value" data-target="165.89">0</span> </h4>
                                                        <a href="#" class="text-decoration-underline text-white-50">Withdraw money</a>
                                                    </div>
                                                    <div class="avatar-sm flex-shrink-0">
                                                        <span class="avatar-title bg-primary-subtle rounded fs-3">
                                                            <i class="bx bx-wallet text-primary"></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div><!-- end card body -->
                                        </div><!-- end card -->
                                    </div><!-- end col -->
                                </div> 
                                <!-- end row-->


                            

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="leadsList">
                                <div class="card-header border-0">
                               
                                    
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-3">
                                        <h5 class="card-title mb-0">Recently Added Profiles</h5>
                                            <!-- <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-auto ms-auto">
                                            <div class="hstack gap-2">
                                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                
                                                <!--<button type="button" class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i> Fliters</button>
                                               <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Leads</button>-->
                                                <span class="dropdown">
                                                    <!--<button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-settings-4-line"></i>
                                                    </button>-->
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Copy</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to pipline</a></li>
                                                        <li><a class="dropdown-item" href="#">Add to exceptions</a></li>
                                                        <li><a class="dropdown-item" href="#">Switch to common form view</a></li>
                                                        <li><a class="dropdown-item" href="#">Reset form view to default</a></li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card">
                                              <table class="table align-middle" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="name">Profile ID</th>
                                                        <th class="sort" data-sort="name">Profile Name</th>
                                                        <th class="sort" data-sort="company_name">Contact Person</th>
                                                        <th class="sort" data-sort="phone">Phone</th>
                                                        <th class="sort" data-sort="date">Created Date</th>
                                                    <th class="sort" data-sort="location">Location</th>
                                                   <th class="sort" data-sort="name">Franchise ID</th>
                                                        <th class="sort" data-sort="date">Status </th>
                                                        
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00001</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000101</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                      

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00002</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000102</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                              <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00003</td>
                                                        <td class="company_name">xyz</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                      <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000103</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                            
                                                        </td>
                                                     
                                                        
                                                           

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00004</td>
                                                        <td class="company_name">abc</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000104</td>
                                                        <td class="tags">
                                                          
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                       

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00005</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000105</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>                                                        </td>
                                                     
                                                        
                                                           

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00005</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000106</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                           

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00006</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000107</td>
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00007</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000108</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                            
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00008</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000109</td>
                                                        <td class="tags">
                                                           
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00009</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000110</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                       

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00009</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000111</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                        
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                           <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS000010</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000112</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                           <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="addprofile-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                              <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                                
                                            </table>
                                           
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-1rem">
                                             <div class="d-flex justify-content-strat mt-3">

                                                 <div class="pagination-wrap hstack gap-2">
                                                         <div class="text-muted ">Showing <span class="fw-semibold"> 10 </span>Records
                                                         </div>
                                                 
                                                 </div>
                                            </div>
                                            
                                        
                                            <!-- <div class="text-muted">Showing<span class="fw-semibold">10</span>
                                            </div> -->
                                            <div class="d-flex justify-content-end mt-3">
                                                <div class="pagination-wrap hstack gap-2">

                                               <!-- <ul class="pagination listjs-pagination mb-0"></ul>-->
                                                   <!-- <a href="follow-up.php"><button type="button" class="btn btn-info">View More</button>-->

                                                    
                                                </div>
                                                
                                                
                                            </div>
                                    </div>

                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0">
                                                <div class="modal-header bg-info-subtle p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />
                                                        <div class="row g-3">
                                                       
                                                            
                                                        <div class="col-lg-6">
                                                               <div>
                                                                    <label for="industry_type-field" class="form-label">Industry Type</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">Sub Industry Type</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select sub industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                     

                                                            <div class="col-lg-12">                                                             
                                                                <div>
                                                                    <label for="companyname-field" class="form-label"> Company Name</label>
                                                                    <input type="text" id="companyname-field" class="form-control" placeholder="Enter company name" required />
                                                                </div> 
                                                            </div>

                                                            <div class="col-lg-12">
                                                            <div>
                                                                    <label for="owner-field" class="form-label">Owner Name</label>
                                                                    <input type="text" id="owner-field" class="form-control" placeholder="Enter owner name" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Contact Phone</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter contact Phone No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Alternative Phone</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Alternative Phone" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Landline No</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Landline No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Alternative Landline No</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Alternative Landline No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Contact Email</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter contact email" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Web Site</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Website" required />
                                                                </div>
                                                            </div>
                                                                                                                   
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">State</label>
                                                                    <select class="form-select"  id="inputState">
                                                                        <option value="">Select State</option>
                                                                        <option value="Computer Industry">Andhra Pradesh</option>
                                                                        <option value="Chemical Industries">Arunachal Pradesh </option>
                                                                        <option value="Health Services">Assam </option>
                                                                        <option value="Telecommunications Services">Bihar </option>
                                                                        <option value="Textiles: Clothing, Footwear">Chhattisgarh </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">City </label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Address</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Your Address" required />
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Company</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end add modal-->

                                    <!-- Modal -->
                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                </div>
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4 class="fs-semibold">Are you Sure ?</h4>
                                                        <p class="text-muted fs-14 mb-4 pt-1">Are you Sure You want to Remove this Record ?</p>
                                                        <div class="hstack gap-2 justify-content-center remove">

                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->


                                    <div class="modal fade" id="showModal1" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id" style="display: none;">
                                                            <label for="id-field1" class="form-label">ID</label>
                                                            <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label"> Industry</label>
                                                            <input type="text" id="email-field" class="form-control" placeholder="Enter Sub Industry" required />
                                                            <div class="invalid-feedback">Please enter  Industry.</div>
                                                        </div>

                                                        <div>
                                                            <label for="status-field" class="form-label">Status</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="">Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Block">Block</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Industry</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal fade" id="showModal2" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id" style="display: none;">
                                                            <label for="id-field1" class="form-label">ID</label>
                                                            <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label">Industry</label>
                                                            <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label">Sub Industry</label>
                                                            <input type="text" id="email-field" class="form-control" placeholder="Enter Sub Industry" required />
                                                            <div class="invalid-feedback">Please enter Sub Industry.</div>
                                                        </div>

                                                        <div>
                                                            <label for="status-field" class="form-label">Status</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="">Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Block">Deactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Industry</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header bg-light">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Leads Fliters</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <!--end offcanvas-header-->
                                        <form action="#" class="d-flex flex-column justify-content-end h-100">
                                            <div class="offcanvas-body">
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Date</label>
                                                    <input type="date" class="form-control" id="datepicker-range" data-provider="flatpickr" data-range="true" placeholder="Select date">
                                                </div>
                                                
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Sub Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="status-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Status</label>
                                                    <div class="row g-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">New Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">Old Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                                <label class="form-check-label" for="inlineCheckbox3">Loss Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                                <label class="form-check-label" for="inlineCheckbox4">Follow Up</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Location</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select State </option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>
                                                
                                                
                                            </div>
                                            <!--end offcanvas-body-->
                                            <div class="offcanvas-footer border-top p-3 text-center hstack gap-2">
                                                <button class="btn btn-light w-100">Clear Filter</button>
                                                <button type="submit" class="btn btn-success w-100">Filters</button>
                                            </div>
                                            <!--end offcanvas-footer-->
                                        </form>
                                    </div>
                                    <!--end offcanvas-->

                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="leadsList">
                                <div class="card-header border-0">
                               
                                    
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-3">
                                        <h5 class="card-title mb-0">Expired in two months</h5>
                                            <!-- <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-auto ms-auto">
                                            <div class="hstack gap-2">
                                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                
                                                <!--<button type="button" class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i> Fliters</button>
                                               <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Leads</button>-->
                                                <span class="dropdown">
                                                    <!--<button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-settings-4-line"></i>
                                                    </button>-->
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Copy</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to pipline</a></li>
                                                        <li><a class="dropdown-item" href="#">Add to exceptions</a></li>
                                                        <li><a class="dropdown-item" href="#">Switch to common form view</a></li>
                                                        <li><a class="dropdown-item" href="#">Reset form view to default</a></li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card">
                                              <table class="table align-middle" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="name">Profile ID</th>
                                                        <th class="sort" data-sort="name">Profile Name</th>
                                                        <th class="sort" data-sort="company_name">Contact Person</th>
                                                        <th class="sort" data-sort="phone">Phone</th>
                                                        <th class="sort" data-sort="date">Created Date</th>
                                                    <th class="sort" data-sort="location">Location</th>
                                                   <th class="sort" data-sort="name">Franchise ID</th>
                                                        <th class="sort" data-sort="date">Status </th>
                                                        
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00001</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000101</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                      

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00002</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000102</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                              <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00003</td>
                                                        <td class="company_name">xyz</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                      <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000103</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                            
                                                        </td>
                                                     
                                                        
                                                           

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00004</td>
                                                        <td class="company_name">abc</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000104</td>
                                                        <td class="tags">
                                                          
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                       

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00005</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000105</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>                                                        </td>
                                                     
                                                        
                                                           

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00005</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000106</td>
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                           

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00006</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000107</td>
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00007</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000108</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                            
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00008</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000109</td>
                                                        <td class="tags">
                                                           
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00009</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000110</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                       

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                               <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS00009</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                         <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <td class="FNo">QSOFI4000111</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                        
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                           <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">QS000010</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <td class="FNo">QSOFI4000112</td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                           <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View Profile</button></a></li>
                                                                <li ><a href="edit-step1.php"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit Profile</button></a></li>



                                                                <!--<li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                         Edit Profile</button></a></li>-->

                                                                
                                                              <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete Profile
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                </tbody>
                                                
                                            </table>
                                           
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-1rem">
                                             <div class="d-flex justify-content-strat mt-3">

                                                 <div class="pagination-wrap hstack gap-2">
                                                         <div class="text-muted ">Showing <span class="fw-semibold"> 10 </span>Records
                                                         </div>
                                                 
                                                 </div>
                                            </div>
                                            
                                        
                                            <!-- <div class="text-muted">Showing<span class="fw-semibold">10</span>
                                            </div> -->
                                            <div class="d-flex justify-content-end mt-3">
                                                <div class="pagination-wrap hstack gap-2">

                                               <!-- <ul class="pagination listjs-pagination mb-0"></ul>-->
                                                   <!-- <a href="follow-up.php"><button type="button" class="btn btn-info">View More</button>-->

                                                    
                                                </div>
                                                
                                                
                                            </div>
                                    </div>

                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0">
                                                <div class="modal-header bg-info-subtle p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Company</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />
                                                        <div class="row g-3">
                                                       
                                                            
                                                        <div class="col-lg-6">
                                                               <div>
                                                                    <label for="industry_type-field" class="form-label">Industry Type</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">Sub Industry Type</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select sub industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                     

                                                            <div class="col-lg-12">                                                             
                                                                <div>
                                                                    <label for="companyname-field" class="form-label"> Company Name</label>
                                                                    <input type="text" id="companyname-field" class="form-control" placeholder="Enter company name" required />
                                                                </div> 
                                                            </div>

                                                            <div class="col-lg-12">
                                                            <div>
                                                                    <label for="owner-field" class="form-label">Owner Name</label>
                                                                    <input type="text" id="owner-field" class="form-control" placeholder="Enter owner name" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Contact Phone</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter contact Phone No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Alternative Phone</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Alternative Phone" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Landline No</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Landline No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Alternative Landline No</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Alternative Landline No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Contact Email</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter contact email" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Web Site</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Website" required />
                                                                </div>
                                                            </div>
                                                                                                                   
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">State</label>
                                                                    <select class="form-select"  id="inputState">
                                                                        <option value="">Select State</option>
                                                                        <option value="Computer Industry">Andhra Pradesh</option>
                                                                        <option value="Chemical Industries">Arunachal Pradesh </option>
                                                                        <option value="Health Services">Assam </option>
                                                                        <option value="Telecommunications Services">Bihar </option>
                                                                        <option value="Textiles: Clothing, Footwear">Chhattisgarh </option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">City </label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Address</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Your Address" required />
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Company</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end add modal-->

                                    <!-- Modal -->
                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                </div>
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4 class="fs-semibold">Are you Sure ?</h4>
                                                        <p class="text-muted fs-14 mb-4 pt-1">Are you Sure You want to Remove this Record ?</p>
                                                        <div class="hstack gap-2 justify-content-center remove">

                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->


                                    <div class="modal fade" id="showModal1" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id" style="display: none;">
                                                            <label for="id-field1" class="form-label">ID</label>
                                                            <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label"> Industry</label>
                                                            <input type="text" id="email-field" class="form-control" placeholder="Enter Sub Industry" required />
                                                            <div class="invalid-feedback">Please enter  Industry.</div>
                                                        </div>

                                                        <div>
                                                            <label for="status-field" class="form-label">Status</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="">Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Block">Block</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Industry</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal fade" id="showModal2" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id" style="display: none;">
                                                            <label for="id-field1" class="form-label">ID</label>
                                                            <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label">Industry</label>
                                                            <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label">Sub Industry</label>
                                                            <input type="text" id="email-field" class="form-control" placeholder="Enter Sub Industry" required />
                                                            <div class="invalid-feedback">Please enter Sub Industry.</div>
                                                        </div>

                                                        <div>
                                                            <label for="status-field" class="form-label">Status</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="">Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Block">Deactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Industry</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header bg-light">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Leads Fliters</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <!--end offcanvas-header-->
                                        <form action="#" class="d-flex flex-column justify-content-end h-100">
                                            <div class="offcanvas-body">
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Date</label>
                                                    <input type="date" class="form-control" id="datepicker-range" data-provider="flatpickr" data-range="true" placeholder="Select date">
                                                </div>
                                                
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Sub Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="status-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Status</label>
                                                    <div class="row g-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">New Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">Old Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                                <label class="form-check-label" for="inlineCheckbox3">Loss Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                                <label class="form-check-label" for="inlineCheckbox4">Follow Up</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Location</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select State </option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>
                                                
                                                
                                            </div>
                                            <!--end offcanvas-body-->
                                            <div class="offcanvas-footer border-top p-3 text-center hstack gap-2">
                                                <button class="btn btn-light w-100">Clear Filter</button>
                                                <button type="submit" class="btn btn-success w-100">Filters</button>
                                            </div>
                                            <!--end offcanvas-footer-->
                                        </form>
                                    </div>
                                    <!--end offcanvas-->

                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="leadsList">
                                <div class="card-header border-0">
                               
                                    
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-3">
                                        <h5 class="card-title mb-0">Added All Executives</h5>
                                            <!-- <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-auto ms-auto">
                                            <div class="hstack gap-2">
                                               <!-- <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                
                                                <button type="button" class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i> Fliters</button>
                                               <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Leads</button>-->
                                                <span class="dropdown">
                                                    <!--<button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-settings-4-line"></i>
                                                    </button>-->
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Copy</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to pipline</a></li>
                                                        <li><a class="dropdown-item" href="#">Add to exceptions</a></li>
                                                        <li><a class="dropdown-item" href="#">Switch to common form view</a></li>
                                                        <li><a class="dropdown-item" href="#">Reset form view to default</a></li>
                                                    </ul>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card">
                                               <table class="table align-middle" id="customerTable">
                                                <thead class="table-light">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="name">Sr No.</th>
                                                        <th class="sort" data-sort="name">ID</th>
                                                        <th class="sort" data-sort="name">Executive Name</th>
                                                        <th class="sort" data-sort="phone">Phone No.</th>
                                                        <th class="sort" data-sort="company_name">Created Date</th>
                                                        <th class="sort" data-sort="phone">Added Profiles</th>
                                                         
                                                       <!-- <th class="sort" data-sort="location">Revenew</th>-->
                                                        <!--<th class="sort" data-sort="tags">Tags</th>-->
                                                        <th class="sort" data-sort="date">Deactive Profiles </th>
                                                        <!--<th class="sort" data-sort="action">Contact</th>-->
                                                        <th class="sort" data-sort="date">Status</th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">01</td>
                                                        <td class="leadNo">QSO-E01</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">10</td>
                                                        
                                                         <!--<td class="phone">14</td>-->
                                                        <td class="location">41</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        
                                                     
                                                        
                                                        <!--<td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->
                                                    <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                               <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                               <!-- <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">02</td>
                                                        <td class="leadNo">QSO-E02</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">20</td>
                                                        
                                                        <!-- <td class="phone">79</td>-->
                                                        <td class="location">97</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                       <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                               <!-- <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">03</td>
                                                        <td class="leadNo">QSO-E02</td>
                                                        <td class="company_name">xyz</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">30</td>
                                                        
                                                         <!--<td class="phone">46</td>-->
                                                        <td class="location">64</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-success-subtle text-success">Active</span>
                                                            
                                                        </td>
                                                     
                                                        
                                                           <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                               <!--  <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">04</td>
                                                        <td class="leadNo">QSO-E02</td>
                                                        <td class="company_name">abc</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">40</td>
                                                        
                                                         <!--<td class="phone">13</td>-->
                                                        <td class="location">22</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                          
                                                         <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                       <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                               <!--  <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                         <td class="leadNo">05</td>
                                                        <td class="leadNo">QSO-E05</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">50</td>
                                                        
                                                         <!--<td class="phone">89</td>-->
                                                        <td class="location">15</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-success-subtle text-success">Active</span>                                                        </td>
                                                     
                                                        
                                                          <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                                <!-- <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>

                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                         <td class="leadNo">06</td>
                                                        <td class="leadNo">QSO-E06</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">60</td>
                                                        
                                                         <!--<td class="phone">78</td>-->
                                                        <td class="location">29</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                          <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                                <!-- <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td class="leadNo">07</td>
                                                        <td class="leadNo">QSO-E07</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">70</td>
                                                        
                                                         <!--<td class="phone">56</td>-->
                                                        <td class="location">74</td>
                                                        <!--<td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                       <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                               <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                                <!-- <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                         <td class="leadNo">08</td>
                                                        <td class="leadNo">QSO-E08</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">80</td>
                                                        
                                                         <!--<td class="phone">45</td>-->
                                                        <td class="location">24</td>
                                                      <!--  <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success">Active</span>
                                                            
                                                        </td>
                                                     
                                                        
                                                       <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                                <!-- <li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                         <td class="leadNo">09</td>
                                                        <td class="leadNo">QSO-E09</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">90</td>
                                                        
                                                         <!--<td class="phone">23</td>-->
                                                        <td class="location">85</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                           
                                                            <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                        <!--<td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                                <!--<li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                                         <td class="leadNo">10</td>
                                                        <td class="leadNo">QSO-E10</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="date">06 Apr, 2021</td>
                                                        <td class="leads_score">100</td>
                                                        
                                                         <!--<td class="phone">12</td>-->
                                                        <td class="location">65</td>
                                                        <!--<td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success">Active</span>
                                                        </td>
                                                     
                                                        
                                                       <!-- <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Call">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-phone-line fs-16"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Message">
                                                                    <a href="javascript:void(0);" class="text-muted d-inline-block">
                                                                        <i class="ri-question-answer-line fs-16"></i>
                                                                    </a>
                                                                </li>

                                                            </ul>
                                                        </td>-->

                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">

                                                                <li ><a href="#showContact" data-bs-toggle="modal"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="#showModal8" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Edit</button></a></li>

                                                                <!--<li><a class="dropdown-item" href="javascript:void(0);"><i class="ri-download-2-line align-bottom me-2 text-muted"></i>
                                                                        Download</a></li>-->
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal">
                                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                    Delete
                                                                </a>
                                                            </li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                    
                                                   
                                                </tbody>
                                                
                                            </table>
                                           
                                            <div class="noresult" style="display: none">
                                                <div class="text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                                    <p class="text-muted mb-0">We've searched more than 150+ leads We did not find any leads for you search.</p>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="mt-1rem">
                                             <div class="d-flex justify-content-strat mt-3">

                                                 <div class="pagination-wrap hstack gap-2">
                                                         <div class="text-muted ">Showing <span class="fw-semibold"> 10 </span>Records
                                                         </div>
                                                 
                                                 </div>
                                            </div>
                                            
                                        
                                            <!-- <div class="text-muted">Showing<span class="fw-semibold">10</span>
                                            </div> -->
                                            <div class="d-flex justify-content-end mt-3">
                                                <div class="pagination-wrap hstack gap-2">

                                               <!-- <ul class="pagination listjs-pagination mb-0"></ul>-->
                                                    <!--<a href="follow-up.php"><button type="button" class="btn btn-info">View More</button>-->

                                                    
                                                </div>
                                                
                                            </div>
                                    </div>
                                    <div class="modal fade" id="showContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-0">
                                                 <div class="flex-shrink-0 avatar-lg mx-auto">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="assets/images/companies/img-2.png" alt="" height="50" />
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-1"> ID</h5>
                                            <p class="text-muted">QSO-E01</p>
                                        </div>
                                        <div class="table-responsive "style="margin-left:20px">
                                            <table class="table mb-20  table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th><span class="fw-medium">Executive Name </span></th>
                                                        <td>david william</td>
                                                    </tr>
                                                    
                                                    
                                                   
                                                    
                                                    <tr>
                                                        <th><span class="fw-medium">Contact No.</span></th>
                                                        <td> 9876 654 321</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Alternate No.</span></th>
                                                        <td> 999 876 5432</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Landline No.</span></th>
                                                        <td> 9876 654 321</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Alternative Landline No.</span></th>
                                                        <td> 999 876 5432</td>
                                                    </tr>
                                                     <tr>
                                                        <th><span class="fw-medium">Added Profiles</span></th>
                                                        <td>10</td>
                                                    </tr>
                                                     <!--<tr>
                                                        <th><span class="fw-medium">Revenew</span></th>
                                                        <td>14</td>
                                                    </tr>-->
                                                    <tr>
                                                        <th><span class="fw-medium">Deactive Profiles</span></th>
                                                        <td>1</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                                
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="modal fade" id="showModal8" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0">
                                                <div class="modal-header bg-info-subtle p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Added Executive</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />
                                                        <div class="row g-3">
                                                       
                                                            
                                                        <!--<div class="col-lg-6">
                                                               <div>
                                                                    <label for="industry_type-field" class="form-label">Industry Type</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>-->


                                                            <!--<div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">Sub Industry Type</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select sub industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>-->
                                                     

                                                            <div class="col-lg-12">                                                             
                                                                <div>
                                                                    <label for="companyname-field" class="form-label"> ID</label>
                                                                    <input type="text" id="companyname-field" class="form-control" placeholder="Enter Executive name" required />
                                                                </div> 
                                                            </div>

                                                            <div class="col-lg-12">
                                                            <div>
                                                                    <label for="owner-field" class="form-label">Executive Name</label>
                                                                    <input type="text" id="owner-field" class="form-control" placeholder="Enter Executive Name" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Contact Phone</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter contact Phone No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Alternative Phone</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Alternative Phone" required />
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Landline No</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Landline No" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Alternative Landline No</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Alternative Landline No" required />
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Added Profiles</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Added Profiles" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Revenew</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Revenew" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Deactive Profiles</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Deactive Profiles" required />
                                                                </div>
                                                            </div>
                                                                                                                   
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">Status</label>
                                                                    <select class="form-select"  id="inputState">
                                                                        <option value="">Select Status</option>
                                                                        <option value="Computer Industry">Active</option>
                                                                        <option value="Chemical Industries">Deactive</option>
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>

                                                           <!-- <div class="col-lg-6">
                                                                <div>
                                                                    <label for="industry_type-field" class="form-label">City </label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                                </div>
                                                            </div>-->

                                                           <!-- <div class="col-lg-12">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Address</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Your Address" required />
                                                                </div>
                                                            </div>-->
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Update</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end add modal-->

                                    <!-- Modal -->
                                    <div class="modal fade zoomIn" id="deleteRecordModal" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                                                </div>
                                                <div class="modal-body p-5 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#405189,secondary:#f06548" style="width:90px;height:90px"></lord-icon>
                                                    <div class="mt-4 text-center">
                                                        <h4 class="fs-semibold">Are you Sure ?</h4>
                                                        <p class="text-muted fs-14 mb-4 pt-1">Are you Sure You want to Remove this Record ?</p>
                                                        <div class="hstack gap-2 justify-content-center remove">

                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                            <button class="btn btn-danger" id="delete-record">Yes, Delete It!!</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->


                                    <div class="modal fade" id="showModal1" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id" style="display: none;">
                                                            <label for="id-field1" class="form-label">ID</label>
                                                            <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                                        </div>
                                        
                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label"> Industry</label>
                                                            <input type="text" id="email-field" class="form-control" placeholder="Enter Sub Industry" required />
                                                            <div class="invalid-feedback">Please enter  Industry.</div>
                                                        </div>

                                                        <div>
                                                            <label for="status-field" class="form-label">Status</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="">Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Block">Block</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Industry</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="modal fade" id="showModal2" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-light p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />

                                                        <div class="mb-3" id="modal-id" style="display: none;">
                                                            <label for="id-field1" class="form-label">ID</label>
                                                            <input type="text" id="id-field1" class="form-control" placeholder="ID" readonly />
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label">Industry</label>
                                                            <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="email-field" class="form-label">Sub Industry</label>
                                                            <input type="text" id="email-field" class="form-control" placeholder="Enter Sub Industry" required />
                                                            <div class="invalid-feedback">Please enter Sub Industry.</div>
                                                        </div>

                                                        <div>
                                                            <label for="status-field" class="form-label">Status</label>
                                                            <select class="form-control" data-choices data-choices-search-false name="status-field" id="status-field"  required>
                                                                <option value="">Status</option>
                                                                <option value="Active">Active</option>
                                                                <option value="Block">Block</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="hstack gap-2 justify-content-end">
                                                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="add-btn">Add Industry</button>
                                                            <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header bg-light">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Leads Fliters</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <!--end offcanvas-header-->
                                        <form action="#" class="d-flex flex-column justify-content-end h-100">
                                            <div class="offcanvas-body">
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Date</label>
                                                    <input type="date" class="form-control" id="datepicker-range" data-provider="flatpickr" data-range="true" placeholder="Select date">
                                                </div>
                                                
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Sub Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>

                                                <div class="mb-4">
                                                    <label for="status-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Status</label>
                                                    <div class="row g-2">
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                                <label class="form-check-label" for="inlineCheckbox1">New Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                                <label class="form-check-label" for="inlineCheckbox2">Old Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                                                <label class="form-check-label" for="inlineCheckbox3">Loss Leads</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                                                <label class="form-check-label" for="inlineCheckbox4">Follow Up</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Location</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select State </option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>
                                                
                                                
                                            </div>
                                            <!--end offcanvas-body-->
                                            <div class="offcanvas-footer border-top p-3 text-center hstack gap-2">
                                                <button class="btn btn-light w-100">Clear Filter</button>
                                                <button type="submit" class="btn btn-success w-100">Filters</button>
                                            </div>
                                            <!--end offcanvas-footer-->
                                        </form>
                                    </div>
                                    <!--end offcanvas-->

                                </div>
                            </div>

                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

           
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
        </div>
    </div>

    <!-- Theme Settings -->
    <div class="offcanvas offcanvas-end border-0" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center bg-primary bg-gradient p-3 offcanvas-header">
            <h5 class="m-0 me-2 text-white">Theme Customizer</h5>

            <button type="button" class="btn-close btn-close-white ms-auto" id="customizerclose-btn" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div data-simplebar class="h-100">
                <div class="p-4">
                    <h6 class="mb-0 fw-semibold text-uppercase">Layout</h6>
                    <p class="text-muted">Choose your layout</p>

                    <div class="row gy-3">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout01" name="data-layout" type="radio" value="vertical" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout01">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Vertical</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout02" name="data-layout" type="radio" value="horizontal" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout02">
                                    <span class="d-flex h-100 flex-column gap-1">
                                        <span class="bg-light d-flex p-1 gap-1 align-items-center">
                                            <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                            <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                        </span>
                                        <span class="bg-light d-block p-1"></span>
                                        <span class="bg-light d-block p-1 mt-auto"></span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Horizontal</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout03" name="data-layout" type="radio" value="twocolumn" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout03">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1">
                                                <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Two Column</h5>
                        </div>
                        <!-- end col -->

                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input id="customizer-layout04" name="data-layout" type="radio" value="semibox" class="form-check-input">
                                <label class="form-check-label p-0 avatar-md w-100" for="customizer-layout04">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0 p-1">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Semi Box</h5>
                        </div>
                        <!-- end col -->
                    </div>

                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Color Scheme</h6>
                    <p class="text-muted">Choose Light or Dark Scheme.</p>

                    <div class="colorscheme-cardradio">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-mode-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check card-radio dark">
                                    <input class="form-check-input" type="radio" name="data-bs-theme" id="layout-mode-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100 bg-dark" for="layout-mode-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white bg-opacity-10 d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-white bg-opacity-10 d-block p-1"></span>
                                                    <span class="bg-white bg-opacity-10 d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-visibility">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Visibility</h6>
                        <p class="text-muted">Choose show or Hidden sidebar.</p>
                
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-show" value="show">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-visibility-show">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0 p-1">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column pt-1 pe-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Show</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-visibility" id="sidebar-visibility-hidden" value="hidden">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="sidebar-visibility-hidden">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column pt-1 px-2">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Hidden</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-width">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Width</h6>
                        <p class="text-muted">Choose Fluid or Boxed layout.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-fluid" value="fluid">
                                    <label class="form-check-label p-0 avatar-md w-100" for="layout-width-fluid">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Fluid</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-width" id="layout-width-boxed" value="boxed">
                                    <label class="form-check-label p-0 avatar-md w-100 px-2" for="layout-width-boxed">
                                        <span class="d-flex gap-1 h-100 border-start border-end">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Boxed</h5>
                            </div>
                        </div>
                    </div>

                    <div id="layout-position">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Layout Position</h6>
                        <p class="text-muted">Choose Fixed or Scrollable Layout Position.</p>

                        <div class="btn-group radio" role="group">
                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-fixed" value="fixed">
                            <label class="btn btn-light w-sm" for="layout-position-fixed">Fixed</label>

                            <input type="radio" class="btn-check" name="data-layout-position" id="layout-position-scrollable" value="scrollable">
                            <label class="btn btn-light w-sm ms-0" for="layout-position-scrollable">Scrollable</label>
                        </div>
                    </div>
                    <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Topbar Color</h6>
                    <p class="text-muted">Choose Light or Dark Topbar Color.</p>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-light" value="light">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-light">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Light</h5>
                        </div>
                        <div class="col-4">
                            <div class="form-check card-radio">
                                <input class="form-check-input" type="radio" name="data-topbar" id="topbar-color-dark" value="dark">
                                <label class="form-check-label p-0 avatar-md w-100" for="topbar-color-dark">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-primary d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </label>
                            </div>
                            <h5 class="fs-13 text-center mt-2">Dark</h5>
                        </div>
                    </div>

                    <div id="sidebar-size">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Size</h6>
                        <p class="text-muted">Choose a size of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-default" value="lg">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-compact" value="md">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-compact">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Compact</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small" value="sm">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small (Icon View)</h5>
                            </div>

                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar-size" id="sidebar-size-small-hover" value="sm-hover">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-size-small-hover">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1">
                                                    <span class="d-block p-1 bg-primary-subtle mb-2"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Small Hover View</h5>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-view">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar View</h6>
                        <p class="text-muted">Choose Default or Detached Sidebar view.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-default" value="default">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-default">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Default</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-layout-style" id="sidebar-view-detached" value="detached">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-view-detached">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-flex p-1 gap-1 align-items-center px-2">
                                                <span class="d-block p-1 bg-primary-subtle rounded me-1"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle ms-auto"></span>
                                                <span class="d-block p-1 pb-0 px-2 bg-primary-subtle"></span>
                                            </span>
                                            <span class="d-flex gap-1 h-100 p-1 px-2">
                                                <span class="flex-shrink-0">
                                                    <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                        <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="bg-light d-block p-1 mt-auto px-2"></span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Detached</h5>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-color">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Color</h6>
                        <p class="text-muted">Choose a color of Sidebar.</p>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-light" value="light">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-light">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-white border-end d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Light</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient.show">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-dark" value="dark">
                                    <label class="form-check-label p-0 avatar-md w-100" for="sidebar-color-dark">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-primary d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Dark</h5>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-link avatar-md w-100 p-0 overflow-hidden border collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBgGradient" aria-expanded="false" aria-controls="collapseBgGradient">
                                    <span class="d-flex gap-1 h-100">
                                        <span class="flex-shrink-0">
                                            <span class="bg-vertical-gradient d-flex h-100 flex-column gap-1 p-1">
                                                <span class="d-block p-1 px-2 bg-white bg-opacity-10 rounded mb-2"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                                <span class="d-block p-1 px-2 pb-0 bg-white bg-opacity-10"></span>
                                            </span>
                                        </span>
                                        <span class="flex-grow-1">
                                            <span class="d-flex h-100 flex-column">
                                                <span class="bg-light d-block p-1"></span>
                                                <span class="bg-light d-block p-1 mt-auto"></span>
                                            </span>
                                        </span>
                                    </span>
                                </button>
                                <h5 class="fs-13 text-center mt-2">Gradient</h5>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="collapse" id="collapseBgGradient">
                            <div class="d-flex gap-2 flex-wrap img-switch p-2 px-3 bg-light rounded">

                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient" value="gradient">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-2" value="gradient-2">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-2">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-2"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-3" value="gradient-3">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-3">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-3"></span>
                                    </label>
                                </div>
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-sidebar" id="sidebar-color-gradient-4" value="gradient-4">
                                    <label class="form-check-label p-0 avatar-xs rounded-circle" for="sidebar-color-gradient-4">
                                        <span class="avatar-title rounded-circle bg-vertical-gradient-4"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sidebar-img">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Sidebar Images</h6>
                        <p class="text-muted">Choose a image of Sidebar.</p>

                        <div class="d-flex gap-2 flex-wrap img-switch">
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-none" value="none">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-none">
                                    <span class="avatar-md w-auto bg-light d-flex align-items-center justify-content-center">
                                        <i class="ri-close-fill fs-20"></i>
                                    </span>
                                </label>
                            </div>

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-01" value="img-1">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-01">
                                    <img src="assets/images/sidebar/img-1.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>	

                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-02" value="img-2">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-02">
                                    <img src="assets/images/sidebar/img-2.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-03" value="img-3">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-03">
                                    <img src="assets/images/sidebar/img-3.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>
                            <div class="form-check sidebar-setting card-radio">
                                <input class="form-check-input" type="radio" name="data-sidebar-image" id="sidebarimg-04" value="img-4">
                                <label class="form-check-label p-0 avatar-sm h-auto" for="sidebarimg-04">
                                    <img src="assets/images/sidebar/img-4.jpg" alt="" class="avatar-md w-auto object-fit-cover">
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="preloader-menu">
                        <h6 class="mt-4 mb-0 fw-semibold text-uppercase">Preloader</h6>
                        <p class="text-muted">Choose a preloader.</p>
                    
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-custom" value="enable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-custom">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                        <!-- <div id="preloader"> -->
                                        <div id="status" class="d-flex align-items-center justify-content-center">
                                            <div class="spinner-border text-primary avatar-xxs m-auto" role="status">
                                                <span class="visually-hidden">Loading...</span>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Enable</h5>
                            </div>
                            <div class="col-4">
                                <div class="form-check sidebar-setting card-radio">
                                    <input class="form-check-input" type="radio" name="data-preloader" id="preloader-view-none" value="disable">
                                    <label class="form-check-label p-0 avatar-md w-100" for="preloader-view-none">
                                        <span class="d-flex gap-1 h-100">
                                            <span class="flex-shrink-0">
                                                <span class="bg-light d-flex h-100 flex-column gap-1 p-1">
                                                    <span class="d-block p-1 px-2 bg-primary-subtle rounded mb-2"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                    <span class="d-block p-1 px-2 pb-0 bg-primary-subtle"></span>
                                                </span>
                                            </span>
                                            <span class="flex-grow-1">
                                                <span class="d-flex h-100 flex-column">
                                                    <span class="bg-light d-block p-1"></span>
                                                    <span class="bg-light d-block p-1 mt-auto"></span>
                                                </span>
                                            </span>
                                        </span>
                                    </label>
                                </div>
                                <h5 class="fs-13 text-center mt-2">Disable</h5>
                            </div>
                        </div>
                    
                    </div>
                    <!-- end preloader-menu -->

                </div>
            </div>

        </div>
        <div class="offcanvas-footer border-top p-3 text-center">
            <div class="row">
                <div class="col-6">
                    <button type="button" class="btn btn-light w-100" id="reset-layout">Reset</button>
                </div>
                <div class="col-6">
                    <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary w-100">Buy Now</a>
                </div>
            </div>
        </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/node-waves/waves.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="assets/js/plugins.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- gridjs js -->
    <script src="assets/libs/gridjs/gridjs.umd.js"></script>
    <script src="../../../../unpkg.com/gridjs%406.0.6/plugins/selection/dist/selection.umd.js"></script>

    <!--Swiper slider js-->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <!--seller-details init js -->
    <script src="assets/js/pages/seller-details.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>


<!-- apps-ecommerce-seller-details12:36:00 GMT -->
</html>
<?php include('footer.php')?>