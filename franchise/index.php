<?php include 'includes/session.php'; ?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
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
                                                  Franchise Id : <?php echo $admin['franchise_id'];?>
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
                                                        <?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_profile WHERE status='Active' and franchise_id='".$admin['franchise_id']."'");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo " <h4 class='fs-22 fw-semibold text-white mb-4'><span>".$urow['numrows']."  </span></h4>";?>
                                                        <a href="active-profile.php" class="text-decoration-underline text-white-50">View Active Profiles</a>
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
                                                         <?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_profile WHERE status='Deactive' and franchise_id='".$admin['franchise_id']."'");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo " <h4 class='fs-22 fw-semibold text-white mb-4'><span>".$urow['numrows']."  </span></h4>";?>
                                                        <a href="deactive-profile.php" class="text-decoration-underline text-white-50">View Deactive Profile</a>
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
                                                        <?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_executive WHERE status='Active' and f_id='".$admin['franchise_id']."'");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo " <h4 class='fs-22 fw-semibold text-white mb-4'><span>".$urow['numrows']."  </span></h4>";?>
                                                        <a href="active-franchise.php" class="text-decoration-underline text-white-50">See details</a>
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
<!-- end col -->
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
                                                        <th class="sort" data-sort="name">Profile ID</th>
                                                        <th class="sort" data-sort="name">Profile Name</th>
                                                        <th class="sort" data-sort="company_name">Contact Person</th>
                                                        <th class="sort" data-sort="phone">Phone</th>
                                                        <th class="sort" data-sort="date">Created Date</th>
                                                    <th class="sort" data-sort="location">Location</th>
                                                   <th class="sort" data-sort="name">Franchise ID</th>
                                                        <th class="sort" data-sort="date">Status </th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                 <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_profile where status='Active' and franchise_id='".$admin['franchise_id']."' Order By creation_on DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                                    ?>   
                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"><?php echo $cnt++;?></a></td>
                                                        <td class="leadNo"><?php echo $row['profile_id'];?></td>
                                                        <td class="company_name"><?php echo $row['company_name'];?></td>
                                                        <td class="leads_score"><?php echo $row['contact_person'];?></td>
                                                        <td class="phone"><?php echo $row['phone'];?></td>
                                                        <td class="date"><?php echo $row['creation_on'];?></td>
                                                        <td class="location"><?php echo $row['location'];?></td>
                                                       <td class="FNo"><?php echo $row['franchise_id'];?></td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success"><?php echo $row['status'];?></span>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    catch(PDOException $e){
                                                    echo $e->getMessage();
                                                    }

                                                    $pdo->close();
                                                    ?>
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
                                                        
                                                        <th class="sort" data-sort="name">Profile ID</th>
                                                        <th class="sort" data-sort="name">Profile Name</th>
                                                        <th class="sort" data-sort="company_name">Contact Person</th>
                                                        <th class="sort" data-sort="phone">Phone</th>
                                                        <th class="sort" data-sort="date">Created Date</th>
                                                    <th class="sort" data-sort="location">Location</th>
                                                   <th class="sort" data-sort="name">Franchise ID</th>
                                                        <th class="sort" data-sort="date">Status </th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                 <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_profile where status='Active' and franchise_id='".$admin['franchise_id']."' Order By creation_on DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                                    ?>   
                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"><?php echo $cnt++;?></a></td>
                                                        <td class="leadNo"><?php echo $row['profile_id'];?></td>
                                                        <td class="company_name"><?php echo $row['company_name'];?></td>
                                                        <td class="leads_score"><?php echo $row['contact_person'];?></td>
                                                        <td class="phone"><?php echo $row['phone'];?></td>
                                                        <td class="date"><?php echo $row['creation_on'];?></td>
                                                        <td class="location"><?php echo $row['location'];?></td>
                                                       <td class="FNo"><?php echo $row['franchise_id'];?></td>
                                                        <td class="tags">
                                                             <span class="badge bg-success-subtle text-success"><?php echo $row['status'];?></span>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    catch(PDOException $e){
                                                    echo $e->getMessage();
                                                    }

                                                    $pdo->close();
                                                    ?>
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
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_executive where status='Active' and f_id='".$admin['franchise_id']."' Order By creation_on DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                                    ?>   
                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"><?php echo $cnt++;?></a></td>
                                                         <td><?php echo $cnt++;?></td>
                                                        <td class="leadNo"><?php echo $row['e_id'];?></td>
                                                        <td class="company_name"><?php echo $row['executive_name'];?> </td>
                                                        <td class="phone"><?php echo $row['phone_no'];?></td>
                                                        <td class="date"><?php echo $row['creation_on'];?></td>
                                                        <td class="leads_score">0</td>
                                                        
                                                         <!--<td class="phone">12</td>-->
                                                        <td class="location">0</td>
                                                        <!--<td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success"><?php echo $row['status'];?></span>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        }
                                                    }
                                                    catch(PDOException $e){
                                                    echo $e->getMessage();
                                                    }

                                                    $pdo->close();
                                                    ?>
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



<?php include('footer.php')?>