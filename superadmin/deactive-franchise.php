<?php include'includes/session.php';?>
<?php include('header.php');?>
<!doctype html>
    <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Deactive Franchise</h4>
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
                                                <button class="btn btn-soft-danger" id="remove-actions" onClick="deleteMultiple()"><i class="ri-delete-bin-2-line"></i></button>
                                              <!--  <button type="button" class="btn btn-info" data-bs-toggle="offcanvas" href="#offcanvasExample"><i class="ri-filter-3-line align-bottom me-1"></i> Fliters</button>-->
                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Franchise</button>
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
                                                        <th class="sort" data-sort="srno">
                                                           SR No
                                                        </th>
                                                        <th class="sort" data-sort="name">Franchise ID</th>
                                                        <th class="sort" data-sort="name">Franchise Name</th>
                                                        <th class="sort" data-sort="company_name">Owner Name</th>
                                                        <th class="sort" data-sort="phone">Phone</th>
                                                        <th class="sort" data-sort="phone">Email</th>
                                                        <th class="sort" data-sort="location">city</th>
                                                         <th class="sort" data-sort="location">Total Profiles</th>
                                                        <th class="sort" data-sort="creation date">Creation Date</th>
                                                        <th class="sort" data-sort="date">Status </th>
                                                        <!--<th class="sort" data-sort="action">Contact</th>-->
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                    $conn = $pdo->open();
                                                    try{
                                                    $stmt = $conn->prepare("SELECT * FROM tbl_franchise where status='Deactive' Order By creation_on DESC");
                                                    $cnt=1;
                                                    $stmt->execute();
                                                    foreach($stmt as $row){
                                                    ?>   
                                                    <tr>
                                                        <th >
                                                           <?php echo $cnt++;?>
                                                        </th>
                                                        
                                                        <td class="leadNo"><?php echo $row['franchise_id'];?></td>
                                                        <td class="company_name"><?php echo $row['franchise_name'];?></td>
                                                        <td class="leads_score"><?php echo $row['owner_name'];?> </td>
                                                        <td class="phone"><?php echo $row['contact_no'];?></td>
                                                        <td class="phone"><?php echo $row['email'];?></td>
                                                        <td class="location"><?php echo $row['city'];?></td>
                                                        <td class="location"><?php
                                                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_profile WHERE franchise_id='".$row['franchise_id']."'");
                                                        $stmt->execute();
                                                        $urow =  $stmt->fetch();

                                                        echo "".$urow['numrows']." ";?></td>
                                                        <td class="location"><?php echo $row['creation_on'];?></td>
                                                       <!-- <td class="tags">
                                                            <span class="badge bg-primary-subtle text-primary">Industry</span>
                                                            <span class="badge bg-primary-subtle text-primary">Sub Industry</span>
                                                        </td>-->
                                                        <td class="tags">
                                                            <span class="badge bg-success-subtle text-success"><?php echo $row['status'];?></span>
                                                        </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="ri-more-fill align-middle"></i>
                                                            </button>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a href="dashboard-view.php?id=<?php echo $row['franchise_id'];?>"> <button class="dropdown-item" href="javascript:void(0);" onclick="ViewInvoice(this);" data-id="25000351">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Dashboard</button></a></li>
                                                                         <li>
                                                                    <a href="#photo"  data-id="<?php echo $row['id'];?>" data-bs-toggle="modal" class="photo"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Change Status</button></a>
                                                                </li>
                                                                <li >
                                                                    
                                                                     <a class="dropdown-item remove-item-btn edit" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#edit"> 
                                                                <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                        View</button></a></li>

                                                                <li><a href="edit-franchise.php?id=<?php echo $row['id'];?>"><button class="dropdown-item" href="javascript:void(0);">
                                                                    <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</button></a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                <a class="dropdown-item remove-item-btn delete" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#delete" style= "color: #c81515;"><i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a>
                                                           <!-- <a href="#deleteRecordModal" data-bs-toggle="modal" data-bs-target="#delete" data-id="<?php echo $row['id'];?>" class="dropdown-item remove-item-btn delete" style= "color: #c81515;"><i class="mdi mdi-delete me-2 font-18 vertical-middle" style= "color: #c81515;" ></i>Delete</a>-->
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
                                                <div class="text-muted ">Showing             <span class="fw-semibold"> 50 </span>Records</div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include'deactive-franchise-popup.php';?>
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
    url: 'franchise_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
      $('#edit_franchise_id').html(response.franchise_id);
      $('#edit_franchise_name').html(response.franchise_name);
      $('#edit_owner_name').html(response.owner_name);
      $('#edit_contact_no').html(response.contact_no);
      $('#edit_alt_phone').html(response.alt_phone);
      $('#edit_landline_no').html(response.landline_no);
      $('#edit_alt_landline_no').html(response.alt_landline_no);
      $('#edit_email').html(response.email);
       $('#edit_alt_email').html(response.alt_email);
      $('#edit_website').html(response.website);
      $('#edit_adhar_no').html(response.adhar_no);
      $('#edit_pan_no').html(response.pan_no);
      $('#edit_gst').html(response.gst);
      $('#edit_city').html(response.city);
      $('#edit_address').html(response.address);
      $('#edit_creation_on').val(response.creation_on);
      $('#edit_status').val(response.status);
    }
  });
}
</script>