<?php include('header.php');?>

<!doctype html>

       
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
                                <h4 class="mb-sm-0">Deactive Users</h4>

                                <!-- <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="datalisting.php">Data Listing</a></li>
                                        <li class="breadcrumb-item active"><a href="intrested-data.php">Intrested Data</a></li>
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
                                                <!--<button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Leads</button>-->
                                                <span class="dropdown">
                                                   <!-- <button class="btn btn-soft-info btn-icon fs-14" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="ri-settings-4-line"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                        <li><a class="dropdown-item" href="#">Copy</a></li>
                                                        <li><a class="dropdown-item" href="#">Move to pipline</a></li>
                                                        <li><a class="dropdown-item" href="#">Add to exceptions</a></li>
                                                        <li><a class="dropdown-item" href="#">Switch to common form view</a></li>
                                                        <li><a class="dropdown-item" href="#">Reset form view to default</a></li>
                                                    </ul>-->
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
                                                        <th class="sort" data-sort="name">ID</th>
                                                        <th class="sort" data-sort="name">User Name</th>
                                                        <th class="sort" data-sort="company_name">Company</th>
                                                        <th class="sort" data-sort="phone">Phone</th>
                                                        <th class="sort" data-sort="phone">Email</th>
                                                        <th class="sort" data-sort="location">Location</th>
                                                        <!--<th class="sort" data-sort="tags">Tags</th>-->
                                                        <th class="sort" data-sort="date">Status </th>
                                                        <!--<th class="sort" data-sort="action">Contact</th>-->
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">@gmail.com</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-danger-subtle text-danger">Deactive</span> 
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L11</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">@gmai.com</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-danger-subtle text-danger">Deactive</span> 
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L12</td>
                                                        <td class="company_name">xyz</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">@gmail.com</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-danger-subtle text-danger">Deactive</span> 
                                                            
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L13</td>
                                                        <td class="company_name">abc</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">@gmail.com</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                          
                                                        <span class="badge bg-danger-subtle text-danger">Deactive</span> 
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-danger-subtle text-danger">Deactive</span>             
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                        <span class="badge bg-danger-subtle text-danger">Deactive</span> 
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <!--<td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-danger-subtle text-danger">Deactive</span> 
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="phone">5804644694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                      <!--  <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-danger-subtle text-danger">Deactive</span> 
                                                            
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                           
                                                            <span class="badge bg-danger-subtle text-danger">Deactive</span>
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                        <!--<td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-danger-subtle text-danger">Deactive</span>
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-danger-subtle text-danger">Deactive</span>
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                        <td class="leadNo">#L123</td>
                                                        <td class="company_name">Force Medicines</td>
                                                        <td class="leads_score">Force Medicines</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="phone">580-464-4694</td>
                                                        <td class="location">Los Angeles, USA</td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-danger-subtle text-danger">Deactive</span>
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

                                                                <li><a href="#showModal" data-bs-toggle="modal"><button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
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
                                                         <div class="text-muted ">Showing <span class="fw-semibold"> 50 </span>Records</div>
                                                 
                                                 
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

                                    <div class="modal fade" id="showContact" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-0">
                                                 <div class="flex-shrink-0 avatar-lg mx-auto">
                                            <div class="avatar-title bg-light rounded">
                                                <img src="assets/images/companies/img-2.png" alt="" height="50" />
                                            </div>
                                        </div>
                                        <div class="mt-4 text-center">
                                            <h5 class="mb-1">ID</h5>
                                            <p class="text-muted">#L123</p>
                                        </div>
                                        <div class="table-responsive "style="margin-left:20px">
                                            <table class="table mb-20  table-borderless">
                                                <tbody>
                                                    <tr>
                                                        <th><span class="fw-medium">User Name</span></th>
                                                        <td>David Marshall</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Company Name</span></th>
                                                        <td>Partnership</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Email</span></th>
                                                        <td>forcemedicines@gamil.com</td>
                                                    </tr>
                                                     <tr>
                                                        <th><span class="fw-medium">Alternative Email</span></th>
                                                        <td>forcemedicines@gamil.com</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Website</span></th>
                                                        <td><a href="javascript:void(0);" class="link-primary">www.forcemedicines.com</a></td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Contact No.</span></th>
                                                        <td>+(123) 9876 654 321</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Alternate No</span></th>
                                                        <td>+1 999 876 5432</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Landline No.</span></th>
                                                        <td>+(123) 9876 654 321</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Alternative Landline No.</span></th>
                                                        <td>+1 999 876 5432</td>
                                                    </tr>
                                                    <tr>
                                                        <th><span class="fw-medium">Location</span></th>
                                                        <td>Plot No. 9, Sadguru Nagar, Front of Sagar Sweets, Govind Nagar, Nashik, Maharashtra 422009</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="showModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered modal-lg">
                                            <div class="modal-content border-0">
                                                <div class="modal-header bg-info-subtle p-3">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit User Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                <form class="tablelist-form" autocomplete="off">
                                                    <div class="modal-body">
                                                        <input type="hidden" id="id-field" />
                                                        <div class="row g-3">
                                                            <div class="col-lg-12">
                                                                <!-- <div class="text-center">
                                                                    <div class="position-relative d-inline-block">
                                                                        <div class="position-absolute bottom-0 end-0">
                                                                            <label for="company-logo-input" class="mb-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Select Image">
                                                                                <div class="avatar-xs cursor-pointer">
                                                                                    <div class="avatar-title bg-light border rounded-circle text-muted">
                                                                                        <i class="ri-image-fill"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </label>
                                                                            <input class="form-control d-none" value="" id="company-logo-input" type="file" accept="image/png, image/gif, image/jpeg">
                                                                        </div>
                                                                        <div class="avatar-lg p-1">
                                                                            <div class="avatar-title bg-light rounded-circle">
                                                                                <img src="assets/images/users/multi-user.jpg" id="companylogo-img" class="avatar-md rounded-circle object-fit-cover" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <h5 class="fs-13 mt-3">Company Logo</h5>
                                                                </div> -->
                                                              
                                                               <div>
                                                                    <label for="owner-field" class="form-label">User Name </label>
                                                                    <input type="text" id="owner-field" class="form-control" placeholder="Enter owner" required />
                                                                </div> 
                                                            </div>

                                                            <div class="col-lg-12">
                                                            <div>
                                                                    <label for="companyname-field" class="form-label">Company Name</label>
                                                                    <input type="text" id="companyname-field" class="form-control" placeholder="Enter company name" required />
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
                                                                    <label for="contact_email-field" class="form-label">Alternative Email</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter contact email" required />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div>
                                                                    <label for="contact_email-field" class="form-label">Web Site</label>
                                                                    <input type="text" id="contact_email-field" class="form-control" placeholder="Enter Website" required />
                                                                </div>
                                                            </div>
                                                             
                                                           <!-- <div class="col-lg-6">
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
                                                            </div>-->
                                                     
                                                            
                                                            <div class="col-lg-6">
                                                            <div>
                                                                    <label for="industry_type-field" class="form-label">City </label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select your city</option>
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
                                                                    <label for="industry_type-field" class="form-label">State</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select your state</option>
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
                                                            <div class="col-lg-6">
                                                            <div>
                                                                    <label for="industry_type-field" class="form-label">Status</label>
                                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select Status</option>
                                                                        <option value="Computer Industry">Active User</option>
                                                                        <option value="Chemical Industries">Deactive User</option>
                                                                        
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            
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


                                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header bg-light">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Deactive User Fliters</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <!--end offcanvas-header-->
                                        <form action="#" class="d-flex flex-column justify-content-end h-100">
                                            <div class="offcanvas-body">
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Date</label>
                                                    <input type="date" class="form-control" id="datepicker-range" data-provider="flatpickr" data-range="true" placeholder="Select date">
                                                </div>
                                                
                                               <!-- <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>-->

                                               <!-- <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Sub Industry</label>
                                                    <select class="form-select" id="industry_type-field">
                                                                        <option value="">Select industry type</option>
                                                                        <option value="Computer Industry">Computer Industry</option>
                                                                        <option value="Chemical Industries">Chemical Industries</option>
                                                                        <option value="Health Services">Health Services</option>
                                                                        <option value="Telecommunications Services">Telecommunications Services</option>
                                                                        <option value="Textiles: Clothing, Footwear">Textiles: Clothing, Footwear</option>
                                                                    </select>
                                                </div>-->

                                                <div class="mb-4">
                                                   <!-- <label for="status-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Status</label>
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
                                                    </div>-->
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

           <?php include('footer.php');?>
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

    <!-- list.js min js -->
    <script src="assets/libs/list.js/list.min.js"></script>
    <script src="assets/libs/list.pagination.js/list.pagination.min.js"></script>

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- crm leads init -->
    <script src="assets/js/pages/crm-leads.init.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>
</body>


<!-- apps-crm-leads12:36:05 GMT -->
</html>