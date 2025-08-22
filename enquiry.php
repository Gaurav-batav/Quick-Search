<?php include('dash_header.php');?>
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="dashboard.php" class="items-center"><i class="flaticon-discovery mr15"></i>Dashboard</a>
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
            <a href="business-profile.php" class="items-center "><i class="flaticon-new-tab mr15"></i>My Business Profile</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="enquiry.php" class="items-center -is-active"><i class="flaticon-email mr15"></i>Enquiry</a>
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
            <a href="my-profile.php" class="items-center"><i class="flaticon-user mr15"></i>My Profile</a>
          </div>
          <div class="sidebar_list_item">
            <a href="../logout.php" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
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
                    <li><a href="my-profile.php"><i class="flaticon-user mr10"></i>My Profile</a></li>
                    <li><a class="" href="../logout.php"><i class="flaticon-exit mr10"></i>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              
            </div>
          </div>
           <!-- Explore Apartment -->
    <section class="pt0 pb90 pb10-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">See All Enquery</h2>
            </div>
          </div>
        </div>
        <?php
                        $stmt = $conn->prepare("SELECT *, COUNT(count) AS numrows FROM tbl_profile WHERE user_id='".$user['id']."'");
                            $stmt->execute();
                            $urow =  $stmt->fetch();
                            {
?>
        <div class="row">
             <?php
                $conn = $pdo->open();
                try{
                $stmt = $conn->prepare("SELECT * FROM enquiry where p_id='".$urow['id']."' Order By creation_on DESC");
                $cnt=1;
                $stmt->execute();
                foreach($stmt as $row){
                ?> 
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
            <div class="iconbox-style2 text-left">
              <!--<div class="icon"><img src="images/icon/property-buy.svg" alt=""></div>-->
              <div class="iconbox-content">
                <h5 class="title"><?php echo $row['name'];?></h5>
                <p><?php echo $row['creation_on'];?></p>
                <hr class="mt-2 mb-2">
                 <div class="agent-meta mb5 d-md-flex align-items-center">
                    <a class="  text-red pe-2  bdrr1" href="tel:<?php echo $row['mobile_no'];?>"><i class="flaticon-call pe-1"></i><?php echo $row['mobile_no'];?></a>
                    <a class="text-red ps-2" href="https://api.whatsapp.com/send?phone=<?php echo $row['mobile_no'];?>"target="_blank"><i class="flaticon-whatsapp pe-1"></i>WhatsApp</a>
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
        <?php } ?>
      </div>
    </section>
        </div>
        <?php include('dash_footer.php');?>