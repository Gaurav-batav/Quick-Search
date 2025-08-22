<?php include('header.php');?>
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
                                <h4 class="mb-sm-0">Deactive Profile Data</h4>

                                <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="not-intrested-data.php"> Not Intrested Data</a></li>
                                        <li class="breadcrumb-item active"><a href="follow-up.php">Follow Up</a></li>
                                    </ol>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" id="leadsList">
                                <div class="card-header border-0">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm-3">
                                            <div class="search-box">
                                                <input type="text" class="form-control search" placeholder="Search for...">
                                                <i class="ri-search-line search-icon"></i>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto ms-auto">
                                            <div class="hstack gap-2">
                                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                                <button type="button" class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i> Fliters</button>
                                              <!-- <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Profiles</button>-->
                                               <!--<a class="btn btn-success add-btn" href="addprofile-stepIndustry.php" role="button"><i class="ri-add-line align-bottom me-1"></i>Add Profiles</a>-->

                                                  
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
                                                        <th class="sort" data-sort="name">Company Name</th>
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
                                                    <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_profile where status='Deactive' and franchise_id='".$admin['franchise_id']."' Order By creation_on DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                                    ?>   
                                                   <tr>
                                                        <th scope="row">
                                                          <?php echo $cnt++;?>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"><?php echo $row['profile_id'];?></a></td>
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
                                                        <td>
                                                           <div class="dropdown">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                <a href="#edit"  data-id="<?php echo $row['id'];?>" data-bs-toggle="modal" class="edit"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Change Status</button></a>
                                                                </li>
                                                                <li><a href="edit-stepIndustry.php?id=<?php echo $row['id'];?>"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit Industry</button></a></li>
                                                                <li><a href="edit-personal-info.php?id=<?php echo $row['id'];?>"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit Personal Details</button></a></li>
                                                                <li><a href="edit-services.php?id=<?php echo $row['id'];?>"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit Product & Services</button></a></li>
                                                                <li><a href="edit-social.php?id=<?php echo $row['id'];?>"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit Social Media</button></a></li>
                                                                 <li><a href="edit-gallery.php?id=<?php echo $row['id'];?>"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit Gallery </button></a></li>
                                                                 <li><a href="edit-business-hours.php?id=<?php echo $row['profile_id'];?>"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit Business Hours </button></a></li>
                                                                <!--<li><a href="edit-business-hours.php?id=<?php echo $row['id'];?>"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                Edit Business Hours </button></a></li>-->
                                                              
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                               <a class="dropdown-item remove-item-btn delete" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#delete" style="color:red"><i class="ri-delete-bin-fill align-bottom me-2 text-muted" style="color:red"></i>
                                                                Delete Profile
                                                                </a>
                                                                </li>
                                                            </ul>
                                                            </div>
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
                                                     <div class="text-muted ">Showing <span class="fw-semibold"> 50 </span>Records
                                                     </div>         
                                                 </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-3">
                                                <div class="pagination-wrap hstack gap-2">
                                                    <a class="page-item pagination-prev disabled" href="#">
                                                    Previous
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-next" href="#">
                                                        Next
                                                    </a>
                                                </div>    
                                            </div>
                                        </div>
                                        <?php include('deactive-user-profile.php');?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
          
        </div>
        <!-- end main content-->
    </div>
    <div class="modal fade zoomIn" id="delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" id="deleteRecord-close" data-bs-dismiss="modal" aria-label="Close" id="btn-close"></button>
                </div>
                <div class="modal-body">
                    <div class="mt-2 text-center">
                        <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                        <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                            <h4>Are you sure ?</h4>
                            <p class="text-muted mx-4 mb-0">Are you sure you want to remove this record ?</p>
                        </div>
                    </div>
                    <form method="POST" action="delete-deactive-profile.php">
                        <input type="hidden" class="distid" name="id">
                    <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                        <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn w-sm btn-danger" name="delete">Yes, Delete It!</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
                                     <?php include('footer.php');?>