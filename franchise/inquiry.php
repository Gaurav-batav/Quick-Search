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
                                <h4 class="mb-sm-0">All Inquiris</h4>
                            </div>
                        </div>
                    </div>
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
                                                 <span class="dropdown">
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
                                                        <th class="sort" data-sort="Sr No">Sr No.</th>
                                                        <th class="sort" data-sort="Profile Name">Profile Name</th>
                                                        <th class="sort" data-sort="Name">Name</th>
                                                        <th class="sort" data-sort="Mobile No">Mobile No</th>
                                                        <th class="sort" data-sort="Creation Date">Creation Date</th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT enquiry.*,enquiry.id as p_id,tbl_profile.company_name,tbl_profile.slug, tbl_profile.id as t_id from enquiry join tbl_profile on tbl_profile.id=enquiry.p_id  join tbl_franchise on tbl_franchise.franchise_id=enquiry.f_id WHERE enquiry.F_id='".$admin['franchise_id']."'  Order by enquiry.creation_on DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                                       // $crypted = password_hash($password, PASSWORD_DEFAULT);
                                                    ?>   
                                                    <tr>
                                                        <td class="leadNo"><?php echo $cnt++;?></td>
                                                        <td class="company_name"><a href="https://quicksearchonline.in/description?slug=<?php echo $row['slug'];?>" target="_blank"><?php echo $row['company_name'];?></a></td>
                                                        <td class="phone"><?php echo $row['name'];?></td>
                                                        <td class="phone"><?php echo $row['mobile_no'];?></td>
                                                        <td class="location"><?php echo $row['creation_on'];?></td>
                                                        <td>
                                                            <a class="text-danger d-inline-block remove-item-btn delete" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#delete">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
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
                                    <!-- Modal -->
                                    <div class="modal fade zoomIn" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
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
                                                        <form method="POST" action="delete_inquiry.php">
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
                                    </div>
                                    <!--end modal -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END layout-wrapper -->
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


});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'inquiry_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
     // $('#edit_name').val(response.name);
   //   $('#edit_name').html(response.name);
    }
  });
}
</script>