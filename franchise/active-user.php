<?php 
  include 'includes/session.php';
?>
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
                                <h4 class="mb-sm-0">All Users</h4>
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
                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add User</button>
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
                                                        <th class="sort" data-sort="SR No">SR No</th>
                                                        <th class="sort" data-sort="Name">Full Name</th>
                                                        <th class="sort" data-sort="phone">Phone</th>
                                                        <th class="sort" data-sort="Email">Email</th>
                                                        <th class="sort" data-sort="Password">Password</th>
                                                        <th class="sort" data-sort="date">Status </th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php
                                                $conn = $pdo->open();
                                                try{
                                                $stmt = $conn->prepare("SELECT * FROM users WHERE franchise_id='".$admin['franchise_id']."' Order By created_on DESC");
                                                $cnt=1;
                                                $stmt->execute();
                                                foreach($stmt as $row){
                                                ?>    
                                                    <tr>
                                                        <th scope="row">
                                                           <?php echo $cnt++;?>
                                                        </th>
                                                        <td class="name"><?php echo $row['name'];?></td>
                                                        <td class="company_name"> <?php echo $row['contact_info'];?></td>
                                                        <td class="phone"><?php echo $row['email'];?></td>
                                                        <td class="password"><?php echo $row['password'];?></td>
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
                                                                     <a class="dropdown-item remove-item-btn photo" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#photo"> 
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i>
                                                                        Change Status</button></a></li>

                                                               <li><a href="#password" class=" password" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#edit"><button class="dropdown-item" href="javascript:void(0);">
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
                                                    <div class="text-muted ">Showing <span class="fw-semibold"> 50 </span>Records</div>
                                                 </div>
                                            </div>
                                            <div class="d-flex justify-content-end mt-3">
                                                <div class="pagination-wrap hstack gap-2">
                                                    <a class="page-item pagination-prev disabled" href="#">
                                                    Previous/
                                                    </a>
                                                    <ul class="pagination listjs-pagination mb-0"></ul>
                                                    <a class="page-item pagination-" href="#"> Next
                                                    </a>
                                                </div>
                                            </div>
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
 <?php include('active-user-popup.php');?>
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
   $(document).on('click', '.password', function(e){
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
    url: 'user_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
      $('.edit_contact_info').val(response.contact_info);
      $('.edit_email').val(response.email);
      $('.edit_password').val(response.password);
       $('#edit_name').val(response.name);
    }
  });
}
</script>
<script>  
 $(document).ready(function(){  
   $('#contact_info').blur(function(){

     var contact_info = $(this).val();

     $.ajax({
      url:'check_no.php',
      method:"POST",
      data:{contact_info:contact_info},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability').html('<span class="text-denger">Mobile No Available</span>');
        $('#add-btn').attr("disabled", false);
       }
       else
       {
        $('#availability').html('<span class="text-denger">Mobile No Not Available</span>');
        $('#add-btn').attr("disabled", true);
       }
      }
     })

  });
 });  
</script>
<script>  
 $(document).ready(function(){  
   $('#email').blur(function(){

     var email = $(this).val();

     $.ajax({
      url:'check_email.php',
      method:"POST",
      data:{email:email},
      success:function(data)
      {
       if(data != '0')
       {
        $('#availability1').html('<span class="text-denger">Email Available</span>');
        $('#add-btn').attr("disabled", false);
       }
       else
       {
        $('#availability1').html('<span class="text-denger">Email Not Available</span>');
        $('#add-btn').attr("disabled", true);
       }
      }
     })

  });
 });  
</script>