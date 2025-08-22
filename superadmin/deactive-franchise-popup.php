<div class="modal fade" id="photo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" >Change Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" action="d_f_status.php" enctype="multipart/form-data" >
                <div class="modal-body">
                   <input type="hidden" class="distid" name="id">
                    <div>
                        <label for="status-field" class="form-label">Status</label>
                        <select class="form-control" name="status" required>
                        <?php
                        $conn = $pdo->open();

                        try{
                          $stmt = $conn->prepare("SELECT * FROM tbl_status");
                          $cnt=1;
                          $stmt->execute();
                          foreach($stmt as $row){
                        ?>
                        <option value="<?php echo $row['status'];?>"><?php echo $row['status'];?></option>
                        <?php 
                              }
                            }
                        catch(PDOException $e){
                          echo $e->getMessage();
                            }
                        
                        $pdo->close();
                        ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-success">Update</button>
                        <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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
                <h5 class="mb-1">Franchise ID</h5>
                <p class="text-muted" id="edit_franchise_id"></p>
            </div>
            <div class="table-responsive "style="margin-left:20px">
                <table class="table mb-20  table-borderless">
                    <tbody>
                    <tr>
                        <th><span class="fw-medium">Franchise Name</span></th>
                        <td id="edit_franchise_name"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Owner Name</span></th>
                        <td id="edit_owner_name"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Email</span></th>
                        <td id="edit_email"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Alternative Email</span></th>
                        <td id="edit_alt_email"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Website</span></th>
                        <td id="edit_website" class="link-primary"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Aadhaar Card No</span></th>
                        <td id="edit_adhar_no"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Pan Card No</span></th>
                        <td id="edit_pan_no"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">GST</span></th>
                       <td id="edit_gst"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Contact No.</span></th>
                        <td id="edit_contact_no"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Alternate No.</span></th>
                        <td id="edit_alt_phone"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Landline No.</span></th>
                        <td id="edit_landline_no"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Alternative Landline No.</span></th>
                        <td id="edit_alt_landline_no"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Location</span></th>
                        <td id="edit_address"></td>
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
                    <h5 class="modal-title" >Add Franchise Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                 <form class="tablelist-form" method="POST" action="franchise-add.php">
<div class="modal-body">
<input type="hidden" name="franchise_id" value="QS<?php echo rand();?>"  />
<div class="row g-3">
<div class="col-lg-12">
                        <div>
                            <label for="companyname-field" class="form-label">Franchise Name</label>
                            <input type="text" name="franchise_name" class="form-control" placeholder="Enter company name" required />
                        </div> 
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <label for="owner-field" class="form-label">Owner Name</label>
                            <input type="text" class="form-control" name="owner_name" placeholder="Enter owner name" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Phone</label>
                            <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="contact_no" class="form-control" placeholder="Enter contact Phone No" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Alternative Phone</label>
                            <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="alt_phone" class="form-control" placeholder="Enter Alternative Phone" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Landline No</label>
                            <input type="text" class="form-control" onkeypress="return isNumberKey(event)" maxlength="10" name="landline_no" placeholder="Enter Landline No" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Alternative Landline No</label>
                            <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" name="alt_landline_no" class="form-control" placeholder="Enter Alternative Landline No" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter contact email" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Alternative Email</label>
                            <input type="email" name="alt_email" class="form-control" placeholder="Enter contact email" required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Website</label>
                            <input type="url" name="website" class="form-control" placeholder="Enter Website" required />
                        </div>
                    </div>                                   
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Aadhaar Card No.</label>
                            <input type="text" name="adhar_no"  onkeypress="return isNumberKey(event)" class="form-control" placeholder="Enter Adhaar Card No." required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Pan Card No.</label>
                            <input type="text" name="pan_no" class="form-control" placeholder="Enter Pancard No." required />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">GST</label>
                            <input type="text" name="gst" class="form-control" placeholder="Enter GST" required />
                        </div>
                    </div>
                <div class="col-lg-6">
                    <div>
                        <label for="industry_type-field" class="form-label">City </label>
                        <input type="text" name="city" placeholder="Enter City" class="form-control">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div>
                        <label for="industry_type-field" class="form-label">State</label>
                        <select class="form-select" name="state" required="required">
                            <?php
                            include'includes/config.php';
                            $query=mysqli_query($conn,"SELECT * FROM tbl_states");
                            while($row=mysqli_fetch_array($query))
                            {
                            ?>
                            <option value="<?php echo $row['state_id'];?>"><?php echo $row['state_name'];?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <label for="contact_email-field" class="form-label">Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Enter Your Address" required />
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
                                                        <form method="POST" action="d_delete_franchise.php">
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