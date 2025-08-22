<?php include'includes/session.php';?>
<?php include('header.php');?>
<!doctype html>
    <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">All Active Executive</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                                   <?php
                    if(isset($_SESSION['error'])){
                      echo "
                        
                        <div class='alert alert-danger alert-dismissible bg-danger text-white alert-label-icon fade show' role='alert'>
    <i class='ri-error-warning-line label-icon'></i><strong>Warning</strong> -  ".$_SESSION['error']."
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
                      ";
                      unset($_SESSION['error']);
                    }
                    if(isset($_SESSION['success'])){
                      echo "
                        <div class='alert alert-success alert-dismissible bg-success text-white alert-label-icon fade show' role='alert'>
    <i class='ri-notification-off-line label-icon'></i><strong>Success</strong>  ".$_SESSION['success']."
    <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
</div>
                          ";
                          unset($_SESSION['success']);
                        }
                    ?>
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
                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Executive</button>
                                              
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
                                                        <th class="sort" data-sort="phone">Email</th>
                                                        <th class="sort" data-sort="Password">Password</th>
                                                        <th class="sort" data-sort="company_name">Created Date</th>
                                                        <th class="sort" data-sort="phone">Added Profiles</th>
                                                        <th class="sort" data-sort="date">Deactive Profiles </th>
                                                        <th class="sort" data-sort="date">Status</th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_executive where f_id='".$admin['franchise_id']."' Order By creation_on DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                                    ?>   
                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"><?php echo $row['e_id'];?></a></td>
                                                         <td class="leadNo"><?php echo $cnt++;?></td>
                                                        <td class="leadNo"><?php echo $row['e_id'];?></td>
                                                        <td class="company_name"><?php echo $row['executive_name'];?></td>
                                                        <td class="phone"><?php echo $row['phone_no'];?></td>
                                                         <td class="phone"><?php echo $row['email'];?></td>
                                                        <td class="date"><?php echo $row['password'];?></td>
                                                        <td class="date"><?php echo $row['creation_on'];?></td>
                                                        <td class="location"><?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_profile WHERE status='Active' and executive_id='".$row['id']."'");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo "".$urow['numrows']." ";?></td>
                                                        <td class="location"><?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_profile WHERE status='Deactive' and executive_id='".$row['id']."'");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo "".$urow['numrows']." ";?></td>
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success"><?php echo $row['status'];?></span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">

                                                                <li >
                                                                    
                                                                     <a class="dropdown-item remove-item-btn edit" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#edit"> 
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="edit-executive.php?id=<?php echo $row['id'];?>"><button class="dropdown-item" href="javascript:void(0);">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</button></a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn delete" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#delete" style= "color: #c81515;"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a>
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
                                                    <div class="text-muted ">Showing <span class="fw-semibold"> 10 </span>Records
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-3">
                                                <div class="pagination-wrap hstack gap-2">
                                                </div>
                                            </div>
                                        </div>

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
    <?php include'active-executive-popup.php';?>
  <?php include('footer.php');?>
  <script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#active').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.photo', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.status', function(e){
    e.preventDefault();
    var id = $(this).data('id');
    getRow(id);
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'executive_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
      $('#edit_e_id').html(response.e_id);
      $('#edit_executive_name').html(response.executive_name);
      $('#edit_phone_no').html(response.phone_no);
      $('#edit_email').html(response.email);
      $('#edit_password').html(response.password);
    }
  });
}
</script>
