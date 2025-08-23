<?php include('dash_header.php');?>
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="dashboard" class="items-center -is-active"><i class="flaticon-discovery mr15"></i>Dashboard</a>
          </div>
          <div class="sidebar_list_item ">
            <!--<a href="page-dashboard-message.html" class="items-center"><i class="flaticon-chat-1 mr15"></i>Message</a>-->
          </div>
          <?php
                $conn = $pdo->open();
                try{
                $stmt = $conn->prepare("SELECT * FROM tbl_profile where user_id='".$user['id']."' Order By creation_on DESC limit 1");
                $cnt=1;
                $stmt->execute();
                foreach($stmt as $row){
            ?> 
          <p class="fz15 fw400 ff-heading mt30">MANAGE LISTINGS</p>
          <div class="sidebar_list_item">
            <a href="business-profile" class="items-center"><i class="flaticon-new-tab mr15"></i>My Business Profile</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="enquiry" class="items-center"><i class="flaticon-email mr15"></i>Enquiry</a>
          </div>
           <?php
                }
            }
            catch(PDOException $e){
            echo $e->getMessage();
            }

            $pdo->close();
            ?>
          <div class="sidebar_list_item ">
            <!--<a href="page-dashboard-savesearch.html" class="items-center"><i class="flaticon-search-2 mr15"></i>Saved Search</a>-->
          </div>
          <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
          
          <div class="sidebar_list_item ">
            <a href="my-profile" class="items-center"><i class="flaticon-user mr15"></i>My Profile</a>
          </div>
          <div class="sidebar_list_item">
            <a href="logout" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
          </div>
        </div>
      </div>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
          <div class="row pb40">
            <div class="col-lg-12">
              <div class="dashboard_navigationbar d-block d-lg-none">
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                  <ul id="myDropdown" class="dropdown-content">
                    <li class="active"><a href="dashboard"><i class="flaticon-discovery mr10"></i>Dashboard</a></li>
                     <?php
                $conn = $pdo->open();
                try{
                $stmt = $conn->prepare("SELECT * FROM tbl_profile where user_id='".$user['id']."' Order By creation_on DESC limit 1");
                $cnt=1;
                $stmt->execute();
                foreach($stmt as $row){
            ?> 
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE LISTINGS</p></li>
                    <li><a href="business-profile"><i class="flaticon-new-tab mr15"></i>My Business Profile</a></li>
                    <li><a href="enquiry"><i class="flaticon-email mr15"></i>Enquiry</a></li>
                    <?php
                }
            }
            catch(PDOException $e){
            echo $e->getMessage();
            }

            $pdo->close();
            ?>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE ACCOUNT</p></li>
                    <li><a href="my-profile"><i class="flaticon-user mr10"></i>My Profile</a></li>
                    <li><a class="" href="logout"><i class="flaticon-exit mr10"></i>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
  <script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close dropdown if user clicks outside
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn') && !event.target.closest('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>Hello, <?php echo $user['name'];?></h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Enquiry</div>
                  <div class="title">
                      <?php
                        $stmt = $conn->prepare("SELECT *, COUNT(count) AS numrows FROM tbl_profile WHERE user_id='".$user['id']."'");
                            $stmt->execute();
                            $urow =  $stmt->fetch();
                            {
                               ?>
                      
                      <?php } ?>
                            </div>
                </div>
                <div class="icon text-center"><i class="flaticon-home"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Views</div>
                  <div class="title">
                  <?php
                        $stmt = $conn->prepare("SELECT *, COUNT(count) AS numrows FROM tbl_profile WHERE user_id='".$user['id']."'");
                            $stmt->execute();
                            $urow =  $stmt->fetch();
                            {
?><?php echo $urow['numrows'];?> <?php } ?></div>
                </div>
                <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Visitor Reviews</div>
                  <div class="title"><?php
                        $stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM tbl_review WHERE user_id='".$user['id']."'");
                            $stmt->execute();
                            $urow =  $stmt->fetch();
                            {
?><?php echo $urow['numrows'];?> <?php } ?></div>
                </div>
                <div class="icon text-center"><i class="flaticon-review"></i></div>
              </div>
            </div>
           <div class="col-sm-6 col-xxl-3">
              <!--<div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Favorites</div>
                  <div class="title">67</div>
                </div>
                <div class="icon text-center"><i class="flaticon-like"></i></div>
              </div>-->
            </div>
          </div>
          <div class="row">
             <?php
                            $conn = $pdo->open();
                            try{
                            $stmt = $conn->prepare("SELECT * FROM tbl_profile where user_id='".$user['id']."' Order By creation_on DESC LIMIT 1");
                            $cnt=1;
                            $stmt->execute();
                            foreach($stmt as $row){
                            ?> 
            <div class="col-md-6 col-xl-4">
            <div class="pricing_packages">
              <div class="heading mb60">
                <h4 class="package_title">Business Listing</h4>
                <h1 class="text2">₹ 5000.00</h1>
               
                <p class="text">per year</p>
                <img class="price-icon" src="images/icon/pricing-icon-3.svg" alt="">
              </div>
              <div class="details">
                     <p>Status : <span class="text-success"> <?php echo $row['status'];?></span></p>
                <p class="text mb35">Validity : 1 Year <br><span class="text">Validity date : <?php echo (new DateTime($row['creation_on']))->modify('+1 year')->format('Y-m-d'); ?> </span>
                 </p>
                <div class="list-style1 mb40">
                  <ul>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Business listing </li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Business smart sage </li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Auto SMS for business branding</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Smart user friendly inquiry desk</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>24/7 Full support</li>
                  </ul>
                </div>
                <div class="d-grid">
                     <?php
                                if($row['status']=="pending"){
                            ?>
                 
                  <?php } else{ ?>
                   <a href="invoice?id=<?php echo $row['id'];?>" class="ud-btn btn-thm-border text-thm" target="_blank">Download Invoice<i class="fal fa-arrow-right-long"></i></a>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
             <?php
                            }
                        }
                        catch(PDOException $e){
                        echo $e->getMessage();
                        }

                        $pdo->close();
                    ?>
          </div>
        </div>
        <?php include('dash_footer.php');?>
        