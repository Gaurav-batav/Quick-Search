<?php include'includes/session.php';?>
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
                                        <li class="breadcrumb-item active">Sub-Industries</li>
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
                                                <h5 class="card-title mb-0">Sub Industry </h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex flex-wrap align-items-start gap-2">
                                                <button type="button" class="btn btn-success add-btn" data-bs-toggle="modal" id="create-btn" data-bs-target="#showModal"><i class="ri-add-line align-bottom me-1"></i> Add Sub-Industry</button>
                                                <!-- <button type="button" class="btn btn-info"><i class="ri-file-download-line align-bottom me-1"></i> Import</button> -->
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
                                                        <th class="sort" data-sort="email">Sub-Industry</th>
                                                        <th class="sort" data-sort="email">Industry</th>
                                                        <th class="sort" data-sort="date"> Date</th>
                                                        <th class="sort" data-sort="status">Status</th>
                                                        <th class="sort" data-sort="action">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="list form-check-all">
                                                    <?php
                                                $conn = $pdo->open();

                                                try{
                                                $stmt = $conn->prepare("SELECT sub_industries.*,sub_industries.id as s_id,industries.id as ind_id,industries.name as i_name,industries.creation_on as i_creation_on FROM sub_industries join industries on industries.id=sub_industries.ind_id Order By sub_industries.creation_on DESC");
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
                                                        <td class="email"><?php echo $row['i_name'];?></td>
                                                        <td class="date"><?php echo $row['creation_on'];?></td>
                                                        <td class="status"><span class="badge bg-success-subtle text-success text-uppercase"><?php echo $row['status'];?></span>
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline hstack gap-2 mb-0">
                                                               
                                                               <!-- <li class="list-inline-item"  data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" title="Remove">-->
                                                                    <a class="text-danger d-inline-block remove-item-btn delete" data-bs-toggle="modal" data-id="<?php echo $row['id'];?>" href="#delete">
                                                                        <i class="ri-delete-bin-5-fill fs-16"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('sub-industries-popup.php');?>
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
    url: 'sub_industry_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.distid').val(response.id);
      $('#edit_ind_id').html(response.ind_id);
      $('#edit_name').html(response.name);
    }
  });
}
</script>