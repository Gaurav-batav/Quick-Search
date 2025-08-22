<div class="modal fade" id="photo" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" >Change Status</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" class="needs-validation" action="user-status.php" enctype="multipart/form-data" novalidate>
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
                        <div class="invalid-feedback">Select Status</div>
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
    <div class="modal fade" id="password" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content border-0">
                <div class="modal-header bg-info-subtle p-3">
                    <h5 class="modal-title" >Update User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form class="tablelist-form" method="POST" action="user-edit.php">
                <div class="modal-body">
                    <div class="row g-3">
                         <input type="hidden" class="distid" name="id">
                        <div class="col-lg-6">
                        <div>
                            <label for="companyname-field" class="form-label"> Full Name</label>
                            <input type="text" name="name" id="edit_name" class="form-control" placeholder="Enter Full Name" required />
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact No</label>
                            <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" id="contact_info" name="contact_info" class="form-control edit_contact_info" placeholder="Enter contact No" required />
                            <span id="availability"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Email</label>
                            <input type="email" class="form-control edit_email" name="email" id="email" placeholder="Enter contact email" required />
                            <span id="availability1"></span>
                        </div>
                    </div>
                   <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Password</label>
                            <input type="password" class="form-control edit_password" maxlength="6" name="password" placeholder="Enter Password" required />
                        </div>
                    </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="hstack gap-2 justify-content-end">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="update" class="btn btn-success" id="add-btn">Update</button>
                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
            </div>
        </div>
    </form>
                                            </div>
                                        </div>
                                    </div>
<div class="modal fade" id="s" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" >Change Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form method="POST" class="needs-validation" action="a_f_password.php" enctype="multipart/form-data" novalidate>
                <div class="modal-body">
                   <input type="hidden" class="distid" name="id">
                    <div>
                        <label for="status-field" class="form-label">Change Password</label>
                       <input type="password" class="form-control" id="edit_password" name="password" required>
                       <div class="invalid-feedback">Enter Password</div>
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
                <h5 class="mb-1">User Details</h5>
               <!-- <p class="text-muted" id="edit_franchise_id"></p>-->
            </div>
            <div class="table-responsive "style="margin-left:20px">
                <table class="table mb-20  table-borderless">
                    <tbody>
                    <tr>
                        <th><span class="fw-medium">User Full Name</span></th>
                        <td id="edit_name"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Mobile No</span></th>
                        <td id="edit_contact_info" class="edit_contact_info"></td>
                    </tr>
                    <tr>
                        <th><span class="fw-medium">Email</span></th>
                        <td id="edit_email" class="edit_email"></td>
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
                    <h5 class="modal-title" >Add User Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
                </div>
                <form class="tablelist-form" method="POST" action="user-add.php">
                <div class="modal-body">
                     <input type="hidden" class="" value="<?php echo $admin['f_id'];?>" name="franchise_id">
                     <input type="hidden" class="" value="<?php echo $admin['e_id'];?>" name="executive_id">
                    <div class="row g-3">
                        <div class="col-lg-6">
                        <div>
                            <label for="companyname-field" class="form-label"> Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Full Name" required />
                        </div> 
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact No</label>
                            <input type="text" onkeypress="return isNumberKey(event)" maxlength="10" id="contact_info" name="contact_info" class="form-control" placeholder="Enter contact No" required />
                            <span id="availability"></span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div>
                            <label for="contact_email-field" class="form-label">Contact Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter contact email" required />
                            <span id="availability1"></span>
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
                                                        <form method="POST" action="delete_user.php">
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