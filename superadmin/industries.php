<?php 
  include 'includes/session.php';
?>
<?php include('header.php');?>
    <div class="vertical-overlay"></div>
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Masters</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Masters</a></li>
                                        <li class="breadcrumb-item active">Industries</li>
                                    </ol>
                                </div>
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
                            <div class="card" id="customerList">
                                <div class="card-header border-bottom-dashed">
                                    <div class="row g-4 align-items-center">
                                        <div class="col-sm">
                                            <div>
                                                <h5 class="card-title mb-0">Industry </h5>
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-auto">
                                            <div class="d-flex flex-wrap align-items-start gap-2">
                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Industry</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive table-card mb-1">
                                            <table class="table align-middle" id="customerTable">
                                                <thead class="table-light text-muted">
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" id="checkAll" value="option">
                                                            </div>
                                                        </th>
                                                        <th class="sort" data-sort="customer_name">No</th>
                                                        <th class="sort" data-sort="email">Industry</th>
                                                        <th class="sort" data-sort="icon">Icon</th>
                                                        <th class="sort" data-sort="date"> Date</th>
                                                        <th class="sort" data-sort="status">Status</th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                <?php
                                                $conn = $pdo->open();

                                                try{
                                                $stmt = $conn->prepare("SELECT * FROM industries Order By creation_on DESC");
                                                $cnt=1;
                                                $stmt->execute();
                                                foreach($stmt as $row){
                                                ?>
                                                    <tr>
                                                        <th scope="row">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" name="chk_child" value="option1">
                                                            </div>
                                                        </th>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary"><?php echo $cnt++;?></a></td>
                                                        <td class="customer_name"><?php echo $cnt++;?></td>
                                                        <td class="email"><?php echo $row['name'];?></td>
                                                        <td class="icon"><img  src="assets/images/icon/industry/<?php echo $row['image'];?>" width="20"> 
                                                        
                                                        </td>
                                                        <td class="date"><?php echo $row['creation_on'];?></td>
                                                        <td class="status"><span class="badge bg-danger-subtle text-danger text-uppercase"><?php echo $row['status'];?></span>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="ri-more-fill align-middle"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-end">
                                                                <li>
                                                                    <a href="#edit"  data-id="<?php echo $row['id'];?>" data-bs-toggle="modal" class="edit"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</button></a></li>
                                                               <li>
                                                                    <a href="#status1"  data-id="<?php echo $row['id'];?>" data-bs-toggle="modal" class="status"> <button class="dropdown-item">
                                                                <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Change Icon</button></a></li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                   
                                                                <a class="dropdown-item remove-item-btn delete" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#delete" style="color:red"><i class="ri-delete-bin-fill align-bottom me-2 text-muted" style="color:red"></i>
                                                                Delete
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
                                                    <p class="text-muted mb-0">We've searched more than 150+ customer We did not find any customer for you search.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end">
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
<?php include'industry-popup.php';?>
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
    url: 'industry_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
      $('#edit_name').val(response.name);
   //   $('#edit_name').html(response.name);
    }
  });
}
</script>