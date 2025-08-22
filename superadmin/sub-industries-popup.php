<div class="modal fade" id="showModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title"> Add Sub Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="close-modal"></button>
            </div>
            <form class="needs-validation" method="POST" action="sub_industry_add.php" novalidate>
                <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Industry Name</label>
                    <select class="form-select" name="ind_id" required>
                         <option selected disabled value="">Select industry type</option>
                        <?php
                        $conn = $pdo->open();
                    
                        try{
                        $stmt = $conn->prepare("SELECT * FROM industries WHERE status='Active' Order By creation_on DESC");
                        $cnt=1;
                        $stmt->execute();
                        foreach($stmt as $row){
                                       
                        ?>
                        <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
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
                <div class="mb-3">
                    <div>
                        <label for="Sub-Industry-field" class="form-label">Sub-Industry</label>
                        <input type="text" class="form-control" placeholder="Enter Sub-Industry name" name="name" required />
                        <div class="invalid-feedback">Enter Sub-Industry name</div>
                        </div>
                    </div>
                <div>
                <label for="status-field" class="form-label">Status</label>
                <select class="form-control" name="status" required>
                     <option selected disabled value="">Status</option>
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
                <div class="invalid-feedback"> 
                Please select Status 
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <div class="hstack gap-2 justify-content-end">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <input type="submit" name="add" class="btn btn-success" value="Add">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

                                    <!-- Modal -->
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
                                                    <form method="POST" action="delete_sub_cat.php">
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