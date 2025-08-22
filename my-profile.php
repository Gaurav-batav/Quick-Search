<?php include('dash_header.php');?>
<div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item">
            <a href="dashboard" class="items-center"><i class="flaticon-discovery mr15"></i>Dashboard</a>
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
            <a href="business-profile" class="items-center "><i class="flaticon-new-tab mr15"></i>My Business Profile</a>
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
            <a href="my-profile" class="items-center -is-active"><i class="flaticon-user mr15"></i>My Profile</a>
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
          <div class="row align-items-center pb40">
            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>My Profile</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
               <!-- <div class="col-xl-7">
                  <div class="profile-box position-relative d-md-flex align-items-end mb50">
                    <div class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">
                      <img class="w-100" src="images/listings/profile-1.jpg" alt="">
                      <a href="#" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Image" aria-label="Delete Item"><span class="fas fa-trash-can"></span></a>
                    </div>
                    <div class="profile-content ml30 ml0-sm">
                      <a href="#" class="ud-btn btn-white2 mb30">Upload Profile Files<i class="fal fa-arrow-right-long"></i></a>
                      <p class="text">Photos must be JPEG or PNG format and least 2048x768</p>
                    </div>
                  </div>
                </div>-->
                <div class="col-lg-12">
                  <form class="form-style1" method="POST" action="update_profile.php">
                      <input type="hidden" name="id" value="<?php echo $user['id'];?>">
                    <div class="row">
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Full Name <span class="text-red">* </span></label>
                          <input type="text" value="<?php echo $user['name'];?>" name="name" class="form-control" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Mobile No<span class="text-red">* </span></label>
                          <input type="text" value="<?php echo $user['contact_info'];?>" name="contact_info" class="form-control" placeholder="Your Mobile No" required>
                        </div>
                      </div>
                      <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                          <label class="heading-color ff-heading fw600 mb10">Email<span class="text-red">* </span></label>
                          <input type="email" name="email" value="<?php echo $user['email'];?>" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                      </div>
                    
                      <div class="col-md-12">
                        <div class="text-end">
                            <button type="submit" class="ud-btn btn-dark" name="update">Update Profile<i class="fal fa-arrow-right-long"></i></button>
                         
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!--<div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <h4 class="title fz17 mb30">Social Media</h4>
                <form class="form-style1">
                  <div class="row">
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Facebook Url</label>
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Pinterest Url</label>
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Instagram Url</label>
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Twitter Url</label>
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Linkedin Url</label>
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Website Url (without http)</label>
                        <input type="text" class="form-control" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="text-end">
                        <a class="ud-btn btn-dark" href="page-contact.html">Update Social<i class="fal fa-arrow-right-long"></i></a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>-->
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <h4 class="title fz17 mb30">Change password</h4>
                <form class="form-style1">
                  <div class="row">
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Old Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">New Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password">
                      </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                      <div class="mb20">
                        <label class="heading-color ff-heading fw600 mb10">Confirm New Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password">
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="text-end">
                        <a class="ud-btn btn-dark" href="#">Change Password<i class="fal fa-arrow-right-long"></i></a>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
       <?php include('dash_footer.php');?>