<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0">
            <div class="flex-shrink-0 avatar-lg mx-auto">
                <div class="avatar-title bg-light rounded">
                    <img src="assets/images/companies/img-2.png" alt="" height="50" />
                </div>
            </div>
            <input type="hidden" class="distid" name="id">
            <div class="mt-4 text-center">
                <h5 class="mb-1">Executive ID</h5>
                <p class="text-muted" id="edit_e_id"></p>
            </div>
            <div class="table-responsive "style="margin-left:20px">
                <table class="table mb-20  table-borderless">
                    <tbody>
                    <tr>
                        <th><span class="fw-medium">Executive Name</span></th>
                        <td id="edit_executive_name"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Contact No</span></th>
                        <td id="edit_phone_no"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Email</span></th>
                        <td id="edit_email"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Password</span></th>
                        <td id="edit_password"></td>
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
                                                    <h5 class="modal-title" >Add Executive Details</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                                                </div>
                                                 <form class="tablelist-form" method="POST" action="executive-add.php">
                <div class="modal-body">
                    <input type="hidden" name="f_id" value="<?php echo $admin['franchise_id'];?>"  />
                    <input type="hidden" name="e_id" value="QSO-E<?php echo rand(00000,99999);?>" />
                    <div class="row g-3">
                        <div class="col-lg-6">
                        <div>
                            <label for="companyname-field" class="form-label"> Executive Name</label>
                            <input type="text" name="executive_name" class="form-control" placeholder="Enter Executive Name" required />
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Phone</label>
                            <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="phone_no" class="form-control" placeholder="Enter contact Phone No" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter contact email" required />
                        </div>
                    </div>
                   <div class="col-lg-6">
                            <div>
                                <label for="contact_email-field" class="form-label">Password</label>
                                <input type="password" class="form-control" maxlength="6" name="password" placeholder="Enter Password" required />
                            </div>
                        </div>
                <div class="col-lg-12">
                    <div>
                        <label for="industry_type-field" class="form-label">Status</label>
                        <select class="form-select" name="status" required>
                            <option value="">Select Status</option>
                            <?php
                            include'includes/config.php';
                            $query=mysqli_query($conn,"SELECT * FROM tbl_status");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>
                            <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="hstack gap-2 justify-content-end">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="add" class="btn btn-success" id="add-btn">Add</button>
                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
            </div>
        </div>
    </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <!--end add modal-->
                                    <!-- Modal -->
                            <div class="modal fade zoomIn" id="delete" tabindex="-1" aria-labelledby="deleteRecordLabel" aria-hidden="true">
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
                                                        <form method="POST" action="delete-executive.php">
                                                             <input type="hidden" class="distid" name="id">
                                                        <div class="hstack gap-2 justify-content-center remove">
                                                        
                                                            <button class="btn btn-link link-success fw-medium text-decoration-none" id="deleteRecord-close" data-bs-dismiss="modal"><i class="ri-close-line me-1 align-middle"></i> Close</button>
                                                            <button class="btn btn-danger" name="delete" type="submit" id="delete-record">Yes, Delete It!!</button>
                                                        </div>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end modal -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                                        <div class="offcanvas-header bg-light">
                                            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Active User Fliters</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                        </div>
                                        <!--end offcanvas-header-->
                                        <form action="#" class="d-flex flex-column justify-content-end h-100">
                                            <div class="offcanvas-body">
                                                <div class="mb-4">
                                                    <label for="datepicker-range" class="form-label text-muted text-uppercase fw-semibold mb-3">Date</label>
                                                    <input type="date" class="form-control" id="datepicker-range" data-provider="flatpickr" data-range="true" placeholder="Select date">
                                                </div>
                                                
                                              <!--  <div class="mb-4">
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
                                                  <!--  <label for="status-select" class="form-label text-muted text-uppercase fw-semibold mb-3">Status</label>
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
                                    
                                    
                                    <!--added-->
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
                                                      
                                                     

                                                            <div class="col-lg-12">                                                             
                                                                <div>
                                                                    <label for="companyname-field" class="form-label"> ID</label>
                                                                    <input type="text" id="companyname-field" class="form-control" placeholder="Enter Executive ID" required />
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
                                                           
                                                           <!-- <div class="col-lg-6">
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
                                                            </div>-->
                                                                                                                   
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
