    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="index.php" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo/logo-franchise.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo/logo-franchise.png" alt="" height="17" />
                </span>
            </a>
            <!-- Light Logo-->
            <a href="index.php" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo/logo-franchise.png" alt="" height="22" />
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo/logo-franchise.png" alt="" height="50" />
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
                        </li>
                         <!-- end Dashboard Menu -->

                       
                        <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-components">Profile Management</span></li>
                        
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="active-profile.php">
                                <i class="ri-suitcase-line"></i> <span data-key="t-widgets">Active Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="deactive-profile.php">
                               <i class="ri-suitcase-line"></i> <span data-key="t-widgets">Deactive Profiles</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="pending-profile.php">
                                <i class="ri-suitcase-line"></i> <span data-key="t-widgets">Pending Profiles</span>
                            </a>
                        </li>
                        <!--<li class="nav-item">
                            <a class="nav-link menu-link" href="free-profile.php">
                               <i class="ri-account-circle-line"></i> <span data-key="t-widgets">Free Profiles</span>
                            </a>
                        </li>-->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="renewal-profile.php">
                                <i class="ri-suitcase-line"></i> <span data-key="t-widgets">Renewal Profiles</span>
                            </a>
                        </li>

                         <li class="menu-title"> <span data-key="t-pages">All Executive Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                <i class="ri-store-3-line"></i> <span data-key="t-landing">Executive</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLanding">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="active-executive.php" class="nav-link" data-key="t-one-page">Active Executive</a>
                                    </li>
                                   <!-- <li class="nav-item">
                                        <a href="deactive-executive.php" class="nav-link" data-key="t-nft-landing"> Dective Executive</a>
                                    </li>-->
                                </ul>
                            </div>
                        </li>
                        <li class="menu-title"><span data-key="t-components">Inquiry Management</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="inquiry.php">
                                <i class="ri-rocket-line"></i> <span data-key="t-widgets">All Inquiries</span>
                            </a>
                        </li>

                        <li class="menu-title"><span data-key="t-menu">Logout</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="logout.php">
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


