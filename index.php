<?php include('header.php');?>
    <section class="home-banner-style6 p0" data-stellar-background-ratio="0.2">
      <div class="home-style1">
        <div class="container">
          <div class="row">
            <div class="col-xl-10">
              <div class="inner-banner-style6">
                <h2 class="hero-title text-white animate-up-1">Build Your Business with Quick Search 
   </h2>
                <p class="hero-text text-white fz15 animate-up-2">Quick Search Online Platform for finding local businesses and services.</p>
                <div class="advance-search-tab mt30 mt30-md mb25 animate-up-3">
                  <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Search Now</button>
                    </li>
                  </ul>
                    <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="advance-content-style3">
                       <div class="form-search position-relative" accept-charset="utf-8">
                        <div class="row">
                          <div class="col-md-5 col-lg-5">
                            <div class="advance-search-field position-relative text-start">
                                <div class="box-search">
                                  <span class="icon flaticon-search"></span>
                                  <input class="form-control bgc-f7" type="text" id="search" name="search"  placeholder="Enter Keyword" required>
                                </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-lg-5">
                            <div class="mt-3 mt-md-0">
                              <div class="bootselect-multiselect">
                                  <input class="form-control bgc-f7" type="text" id="city" name="city" placeholder="Enter Location">
                              </div>
                            </div>
                          </div>
                          <div class="col-md-2 pe-0">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-2 mt-md-0">
                              <button onclick="submitForm()" id="submit" class="advance-search-icon ud-btn btn-thm ms-4" type="submit" name="filter"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                   
                  </div>            
                </div>
                <p class="h6 fw600 text-white fz14 animate-up-4 my-3">Or browse featured categories:</p>
                <div class="home4-icon-style mt20 d-none d-sm-flex animate-up-4">
                <?php
                    $conn = $pdo->open();
    
                    try{
                    $stmt = $conn->prepare("SELECT id,name,cat_slug,status,creation_on,image FROM industries WHERE status='Active' Order By rand() DESC LIMIT 4");
                    $cnt=1;
                    $stmt->execute();
                    foreach($stmt as $row){
                ?>
                  <a href="list.php?cat_slug=<?php echo $row['cat_slug'];?>" class="d-flex align-items-center text-white ff-heading me-4"><img src="superadmin/assets/images/icon/industry/<?php echo $row['image'];?>" alt="Girl in a jacket" width="30" height="30">&nbsp; <?php echo $row['name'];?></a>
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
            </div>
          </div>
        </div>
      </div>
    </section>

   <section class="">
      <div class="container">
        <div class="row">
              <div class="col-lg-12 m-auto wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="main-title text-center mb30">
              <h2 class="title text-thm2">Popular Categories on Quick Search Online</h2>
              <p class="paragraph">Quick Search Online helps businesses grow in 240+ categories</p>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12 wow fadeInUp" data-wow-delay="100ms">
            <div class="row">
                <?php
                    $conn = $pdo->open();
    
                    try{
                    $stmt = $conn->prepare("SELECT * FROM industries Order By rand() DESC");
                    $cnt=1;
                    $stmt->execute();
                    foreach($stmt as $row){
                ?>
              <div class="col-sm-6 col-lg-2">
                    <div class="item">
                        <a href="list?cat_slug=<?php echo $row['cat_slug'];?>">
                          <div class="iconbox-style1">
                           <span class="mb20"> <img src="superadmin/assets/images/icon/industry/<?php echo $row['image'];?>" alt="<?php echo $row['image'];?>" width="70" height="70"> </span>
                            <div class="iconbox-content">
                              <h6 class="title text-white"><?php echo $row['name'];?></h6>
                             
                            </div>
                          </div>
                        </a>
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
        </div>
      </div>
    </section>
      <section class="pt45 pb-0 bgc-thm">
          <div class="container maxw1600  pb50">
              <div class="row">
              <div class="col-lg-12 m-auto wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
            <div class="main-title text-center mb30">
              <h2 class="title text-thm2 text-white">Trending Profiles</h2><!--
              <p class="paragraph">Quick Search Online helps businesses grow in 240+ categories</p>-->
            </div>
          </div>
        </div>
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
            <div class="row mt15">
                <?php
                        
                $conn = $pdo->open();

                try{
                   // $inc = 4;   
                    $stmt = $conn->prepare("SELECT tbl_profile.*,tbl_profile.id as p_id ,industries.name as i_name,tbl_profile.slug as p_slug,tbl_profile.profile_id as t_id,tbl_profile.state as t_state from tbl_profile join industries on industries.id=tbl_profile.category_id WHERE tbl_profile.status='Active'");
                     $stmt->execute();
                    foreach ($stmt as $row) {
                    ?>
              <div class="col-lg-6">
                <div class="listing-style1 listing-type">
                  <div class="list-thumb flex-shrink-0">
                    <a href="description?slug=<?php echo $row['slug'];?>">
                        <img style="width:250px;height:250px" src="uploads/original/<?php echo $row['thumbnail2'];?>" alt="">
                        
                        </a>
                    <!--<div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>-->
                   <!-- <div class="list-price">$14,000 / <span>mo</span></div>-->
                  </div>
                  <div class="list-content flex-shrink-1">
                    <h6 class="list-title"><a href="description?slug=<?php echo $row['slug'];?>"><?php echo $row['company_name'];?>
                                        </a></h6>
                    <!--<p class="list-text mb-0">California City, CA, USA</p>-->
                    <div class="agent-meta mt10 mb10 d-md-flex align-items-center">
                   
                     <p class="list-text mb-0  me-4 "><?php echo $row['city'];?>
                     <?php
                                            $conn = $pdo->open();
                                            try{
                                                        
                                            $stmt = $conn->prepare("SELECT * from tbl_states WHERE state_id='".$row['t_state']."'");
                                            $stmt->execute();
                                            foreach ($stmt as $row3) {
                                           
                                        ?>
                                        <?php echo $row3['state_name'];?>
                                         <?php
                                        }
                                      
                                        }
                                        catch(PDOException $e){
                                        echo "There is some problem in connection: " . $e->getMessage();
                                        }
                                        
                                        $pdo->close();
                                        
                                        ?>
                    </p>
                    </div>
                    <span><?php echo substr($row['description'], 0, 110) . '...';?>
                     <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <a  id="thirdname" href="description?slug=<?php echo $row['slug'];?>"><span class="fal fa-arrow-right-long"></span></a>
                      <div class="icons d-flex align-items-center">
                       
                        <a  id="firstname" href="tel:<?php echo $row['phone'];?>"><span class="flaticon-call"></span></a>
                        <a  id="secondname" href="https://api.whatsapp.com/send?phone=<?php echo $row['whatsap_no'];?>" target="_blank"><span class="flaticon-whatsapp"></span></a>
                        <a href="mailto:<?php echo $row['email'];?>"><span class="flaticon-email"></span></a>
                      <!--  <a  href="https://maps.app.goo.gl/aTpSSMfT1zGGv9Zm6" target="_blank"><span class="flaticon-maps"></span></a>-->
                       <!-- <a data-bs-toggle="modal" href="#exampleModalToggle2"><span class="flaticon-fullscreen"></span></a>-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                   }
                  //  if($inc == 1) echo "<div class='col-sm-4'></div><div class='col-sm-4'></div></div>"; 
                 //   if($inc == 2) echo "<div class='col-sm-4'></div></div>";
                }
                catch(PDOException $e){
                    echo "There is some problem in connection: " . $e->getMessage();
                }
                 $pdo->close();
                ?> 
            </div>
          </div>
          </div>
          </section>
    <section class="pt45 pb-0 bg-grey">
      <div class="container maxw1600  pb50">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-sm-6 col-lg-3 col-xl-2">
            <div class="funfact_one text-center">
              <div class="details">
               <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer text-black">200</div></li>
                  <li ><span class="text-black">+</span></li>
                </ul>
                <p class="text mb-0 text-black">Verified Business</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-2">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer text-black">299000</div></li>
                  <li ><span class="text-black">+</span></li>
                </ul>
                <p class="text mb-0 text-black">Verified User</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-2">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timertext-black">250</div></li>
                  
                  <li><span class="text-black">+</span></li>
                </ul>
                <p class="text mb-0 text-black">Repeated Customers</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 col-xl-2">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer text-black">03</div></li>
                 
                  <li><span class="text-black">+</span></li>
                </ul>
                <p class="text mb-0 text-black">Counters</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="bgc-f7" >
      <div class="cta-banner   bdrs12 position-relative pb30 " >
        <div class="container">
          <div class="row align-items-start align-items-xl-center">
            <div class="col-md-10 col-lg-7 col-xl-6">
              <div class="position-relative mb35 mb0-sm wow fadeInRight" data-wow-delay="300ms">
                <div class="exclusive-agent-widget mb30-sm">
                  <h4 class="title mb20"><span class="text-thm">2000+ </span> Verified Business</h4>
                  <div class="thumb d-flex align-items-center mb20">
                    <div class="flex-shrink-0">
                      <img class="wa" src="images/team/ea-1.png" alt="">
                    </div>
                    <div class="flex-grow-1 ml20">
                      <h6 class="title fz14 mb-0">SBI Bank karad</h6>
                      <p class="fz13 mb-0">Treasury Branch</p>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center mb20">
                    <div class="flex-shrink-0">
                      <img class="wa" src="images/team/ea-2.png" alt="">
                    </div>
                    <div class="flex-grow-1 ml20">
                      <h6 class="title fz14 mb-0">Sahyadri Super Speciality Hospital </h6>
                      <p class="fz13 mb-0">karad</p>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center mb20">
                    <div class="flex-shrink-0">
                      <img class="wa" src="images/team/ea-1.png" alt="">
                    </div>
                    <div class="flex-grow-1 ml20">
                      <h6 class="title fz14 mb-0">SBI Bank karad</h6>
                      <p class="fz13 mb-0">Treasury Branch</p>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center mb20">
                    <div class="flex-shrink-0">
                      <img class="wa" src="images/team/ea-2.png" alt="">
                    </div>
                    <div class="flex-grow-1 ml20">
                      <h6 class="title fz14 mb-0">Sahyadri Super Speciality Hospital </h6>
                      <p class="fz13 mb-0">karad</p>
                    </div>
                  </div>
                </div>
                <div class="exclusive-agent-single mb30-sm">
                  <div class="agent-img"><img src="images/team/agent-5.jpg" alt=""></div>
                  <div class="agent-content pt20">
                    <h6 class="title mb-0">Mahindra & Mahindra</h6>
                    <p class="fz15 mb-0">Manufacturing</p>
                  </div>
                </div>
                <div class="img-box-10 position-relative d-none d-xl-block">
                  <img class="img-1 spin-right" src="images/about/element-3.png" alt="">
                  <img class="img-2 bounce-x" src="images/about/element-5.png" alt="">
                  <img class="img-3 bounce-y" src="images/about/element-6.png" alt="">
                  <img class="img-4 bounce-y" src="images/about/element-7.png" alt="">
                  <img class="img-5 spin-right" src="images/about/element-8.png" alt="">
                </div>
              </div>
            </div>
            <div class="col-md-8 col-lg-5 col-xl-5 offset-xl-1">
              <div class="about-box-1 pe-4 mt100 mt0-lg mb30-lg wow fadeInLeft" data-wow-delay="300ms">
                <h2 class="title mb20 text-thm2">List Your Business. Start Getting Enquires.</h2>
                <p class="text mb20 mb30-md fz14">Subscribe, get verified leads, and grow your business.</p>
                <div class="list-style1 mb30 mb30-md">
                  <ul>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Create your online profile and get discovered</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Display your entire Smaprt Page</li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Respond to customer enquiries & engage with reviews </li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Easy to share your profile </li>
                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Run Ads on Quick Search Online to Drive More Leads</li>
                  </ul>
                </div>
                
                <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="ud-btn btn-dark">List Your Business<i class="fal fa-arrow-right-long"></i></a>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
    
      <div class="container">
        <div class="row">
              <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center mb30">
              <h2 class="title text-thm2">Why Choose quick Search Online?</h2>
              <p class="paragraph">Get a free, easy way to communicate with your customers.</p>
            </div>
          </div>
        </div>
        <div  id="content-container" class="row ">
          <div class="col-sm-6 col-lg-3 wow fadeInLeft  " data-wow-delay="00ms">
            <div class="iconbox-style2 text-center bgc-white border border-danger">
              <div class="icon"><img src="images/innovation.png" alt="" height="100px"></div>
              <div class="iconbox-content">
                <h4 class="title">Innovation</h4>
               
               
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 wow fadeInUp" data-wow-delay="300ms">
            <div class="iconbox-style2 active text-center border border-danger">
              <div class="icon"><img src="images/colaboration-icon.png" alt="" height="100px"></div>
              <div class="iconbox-content">
                <h4 class="title">Collaboration</h4>
              
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay="300ms">
            <div class="iconbox-style2 text-center border border-danger">
              <div class="icon"><img src="images/improvement-icon.png" alt="" height="100px"></div>
              <div class="iconbox-content">
                <h4 class="title">Improvement</h4>
               
                
              </div>
            </div>
          </div>
            <div class="col-sm-6 col-lg-3 wow fadeInRight" data-wow-delay="300ms">
            <div class="iconbox-style2 text-center border border-danger">
              <div class="icon"><img src="images/customer-focus-icon.png" alt="" height="100px"></div>
              <div class="iconbox-content">
                <h4 class="title">Customer focus</h4>
                <!--<p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>-->
               
              </div>
            </div>
          </div>
        </div>
       
         

      </div>
    </section>
<?php include('footer.php');?>