    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo/logo-admin.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo/logo-admin.png" alt="" height="17" />
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo/logo-admin.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo/logo-admin.png" alt="" height="50" />
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
                                <i class="ri-user-line"></i> <span data-key="t-dashboards">Users</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarDashboards">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="active-user.php" class="nav-link" data-key="t-analytics">All Users </a>
                                    </li>
                                   <!-- <li class="nav-item">
                                        <a href="deactive-user.php" class="nav-link" data-key="t-crm"> Deactive Users</a>
                                    </li>-->
                                    
                                </ul>
                            </div>
                        </li> <!-- end Dashboard Menu -->

                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">All Franchise</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="ri-store-3-line"></i> <span data-key="t-landing">Franchise</span>
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
                                <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Active Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="deactive-profile.php">
                               <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Deactive Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="pending-profile.php">
                                <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Pending Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="free-profile.php">
                               <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Free Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="renewal-profile.php">
                                <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Renewal Profiles</span>
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
                                    <!--<li class="nav-item">
                                        <a href="#" class="nav-link" data-key="t-google">
                                            City & Pincode
                                        </a>
                                    </li>-->
                                    <li class="nav-item">
                                        <a href="industries.php" class="nav-link" data-key="t-google">
                                           Industries
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sub-industries.php" class="nav-link" data-key="t-google">
                                            Sub-Industries 
                                        </a>
                                    </li>
                                   <!-- <li class="nav-item">
                                        <a href="paymentmode.php" class="nav-link" data-key="t-google">
                                            Payment Mode 
                                        </a>
                                    </li>-->
                                   
                                </ul>
                            </div>
                        </li>

                        <li class="menu-title"><span data-key="t-menu">Ads Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#">
                                <i class="ri-pages-line"></i> <span data-key="t-widgets">Ads</span>
                            </a>
                        </li>


                         <li class="menu-title"><span data-key="t-components">Inquiry Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="inquiry.php">
                                <i class="ri-rocket-line"></i> <span data-key="t-widgets">All Inquiries</span>
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


