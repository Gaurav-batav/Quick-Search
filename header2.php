<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/ace-responsive-menu.css">
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="css/fontawesome.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/bootstrap-select.min.css">
<link rel="stylesheet" href="css/ud-custom-spacing.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/slider.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Welcome - Quick Search Online</title>
<!-- Favicon -->
<link href="images/logo/fav.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/logo/fav.png" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="images/logo/fav.png" sizes="60x60" rel="apple-touch-icon">
<link href="images/logo/fav.png" sizes="72x72" rel="apple-touch-icon">
<link href="images/logo/fav.png" sizes="114x114" rel="apple-touch-icon">
<link href="images/logo/fav.png" sizes="180x180" rel="apple-touch-icon">



</head>
<body>
<div class="wrapper ovh">
  <!--<div class="preloader"></div>-->
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style main-menu">
    <!-- Ace Responsive Menu -->
        <nav class="posr"> 
      <div class="container posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-auto">
            <div class="d-flex align-items-center justify-content-between">
              <div class="logos mr40">
                <a class="header-logo logo1" href="index"><img src="images/logoH2.png" alt="Header Logo" height="70" ></a>
                
              </div>
              <!-- Responsive Menu Structure-->
              <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="visible_list"> <a class="list-item" href="index"><span class="title">Home</span></a>
                  
                </li>
                <li class="megamenu_style"> <a  class="list-item" href="#"><span class="title">Category</span></a>
                  <ul class="row dropdown-megamenu">
                       <?php
                    $conn = $pdo->open();
    
                    try{
                    $stmt = $conn->prepare("SELECT * FROM industries Order By creation_on DESC");
                    $cnt=1;
                    $stmt->execute();
                    foreach($stmt as $row){
                    ?>
                    <li class="col mega_menu_list">
                      <ul>
                        <li><a href="list?cat_slug=<?php echo $row['cat_slug'];?>"><?php echo $row['name'];?></a></li>
                      </ul>
                    </li>
                     <?php 
                         }
                        }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                    ?>
                  </ul>
                </li>
                <li class="visible_list"> <a class="list-item" href="advertising"><span class="title">Other Services</span></a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-auto">
            <div class="d-flex align-items-center">
                <?php
    if(!isset($_SESSION['user'])){
?>
              <a class="login-info d-flex align-items-center" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><i class="far fa-user-circle fz16 me-2"></i> <span class="d-none d-xl-block">Login / Register</span></a>
              <?php } else{ ?>
              <a class="login-info d-flex align-items-center" href="dashboard"><i class="far fa-user-circle fz16 me-2"></i> <span class="d-none d-xl-block">User</span></a>
              <?php } ?>
               <?php
    if(!isset($_SESSION['user'])){
?>
             <a class="ud-btn add-property menu-btn bdrs12 mx-2 mx-xl-4" style="background-color:#EE4C34" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Add Profile<i class="fal fa-arrow-right-long"></i></a>
              <?php } else{ ?>
               <a class="ud-btn add-property menu-btn bdrs12 mx-2 mx-xl-4" style="background-color:#EE4C34"  href="select-industry">Add Profile<i class="fal fa-arrow-right-long"></i></a>
              <?php } ?>
             <!-- <a class="" href="#"><img class="img-1" src="images/icon/nav-icon-white.svg" alt=""><img class="img-2" src="images/icon/nav-icon-dark.svg" alt=""></a>-->
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Signup Modal -->
 

  <!-- Filter Content In Hiddn SideBar -->
  <div class="lefttside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
    </div>
    <div class="hsidebar-content">
      <div class="widget-wrapper">
        <h6 class="list-title">Find your home</h6>
        <div class="search_area">
          <input type="text" class="form-control" placeholder="What are you looking for?">
          <label><span class="flaticon-search"></span></label>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Listing Status</h6>
        <div class="radio-element">
          <div class="form-check d-flex align-items-center mb10">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">Buy</label>
          </div>
          <div class="form-check d-flex align-items-center mb10">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked="checked">
            <label class="form-check-label" for="flexRadioDefault5">Rent</label>
          </div>
          <div class="form-check d-flex align-items-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
            <label class="form-check-label" for="flexRadioDefault6">Sold</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Property Type</h6>
        <div class="checkbox-style1">
          <label class="custom_checkbox">Houses
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Apartments
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Office
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Villa
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Townhome
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Price Range</h6>
        <!-- Range Slider Mobile Version -->
        <div class="range-slider-style2">
          <div class="range-wrapper">
            <div class="mb30 mt35" id="slider"></div>
            <div class="d-flex align-items-center">
              <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
              <span id="slider-range-value2"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Bedrooms</h6>
        <div class="d-flex">
          <div class="selection">
            <input id="any2" name="beds" type="radio" checked>
            <label for="any2">any</label>
          </div>
          <div class="selection">
            <input id="oneplus2" name="beds" type="radio">
            <label for="oneplus2">1+</label>
          </div>
          <div class="selection">
            <input id="twoplus2" name="beds" type="radio">
            <label for="twoplus2">2+</label>
          </div>
          <div class="selection">
            <input id="threeplus2" name="beds" type="radio">
            <label for="threeplus2">3+</label>
          </div>
          <div class="selection">
            <input id="fourplus2" name="beds" type="radio">
            <label for="fourplus2">4+</label>
          </div>
          <div class="selection">
            <input id="fiveplus2" name="beds" type="radio">
            <label for="fiveplus2">5+</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Bathrooms</h6>
        <div class="d-flex">
          <div class="selection">
            <input id="bathany2" name="bath" type="radio" checked>
            <label for="bathany2">any</label>
          </div>
          <div class="selection">
            <input id="bathoneplus2" name="bath" type="radio">
            <label for="bathoneplus2">1+</label>
          </div>
          <div class="selection">
            <input id="bathtwoplus2" name="bath" type="radio">
            <label for="bathtwoplus2">2+</label>
          </div>
          <div class="selection">
            <input id="baththreeplus2" name="bath" type="radio">
            <label for="baththreeplus2">3+</label>
          </div>
          <div class="selection">
            <input id="bathfourplus2" name="bath" type="radio">
            <label for="bathfourplus2">4+</label>
          </div>
          <div class="selection">
            <input id="bathfiveplus2" name="bath" type="radio">
            <label for="bathfiveplus2">5+</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper advance-feature-modal">
        <h6 class="list-title">Location</h6>
        <div class="form-style2 input-group">
          <select class="selectpicker" data-width="100%">
            <option>All Cities</option>
            <option data-tokens="California">California</option>
            <option data-tokens="Chicago">Chicago</option>
            <option data-tokens="LosAngeles">Los Angeles</option>
            <option data-tokens="Manhattan">Manhattan</option>
            <option data-tokens="NewJersey">New Jersey</option>
            <option data-tokens="NewYork">New York</option>
            <option data-tokens="SanDiego">San Diego</option>
            <option data-tokens="SanFrancisco">San Francisco</option>
            <option data-tokens="Texas">Texas</option>
          </select>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Square Feet</h6>
        <div class="space-area">
          <div class="d-flex align-items-center justify-content-between">
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="Min.">
            </div>
            <span class="dark-color">-</span>
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="Max">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Year Built</h6>
        <div class="space-area">
          <div class="d-flex align-items-center justify-content-between">
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="2019">
            </div>
            <span class="dark-color">-</span>
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="2022">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <div class="feature-accordion">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item border-none">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button border-none p-0 after-none feature-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><span class="flaticon-settings"></span> Other Features</button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body p-0 mt15">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">Attic
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Basketball court
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Air Conditioning
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Lawn
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">TV Cable
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Dryer
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">Outdoor Shower
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Washer
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Lake view
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Wine cellar
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Front yard
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Refrigerator
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <div class="btn-area d-grid align-items-center">
          <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
        </div>
      </div>
      <div class="reset-area d-flex align-items-center justify-content-between">
        <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
        <a class="reset-button" href="#"><span class="flaticon-favourite"></span><u>Save Search</u></a>
      </div>
    </div>
  </div>
  <!--End Filter Content In Hiddn SideBar -->

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
<div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
        <div class="header innerpage-style">
            <div class="menu_and_widgets">
                <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                    <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
                    <a class="mobile_logo" href="index"><img src="images/logo/logo2.png" alt="" height="50"></a>
                    <?php
                    if(!isset($_SESSION['user'])){
                    ?>
                    <a data-bs-toggle="modal" href="#exampleModalToggle"><span class="icon fz18 far fa-user-circle"></span></a>
                    <?php } else{ ?>
                    <a class="login-info d-flex align-items-center" href="dashboard"><i class="far fa-user-circle fz16 me-2"></i> <span class="d-none d-xl-block">User</span></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
        <ul>
            <li><a href="index"><span>Home</span></a></li>
            <li><span>Popular Categories</span>
                <ul>
                    <?php
                    $conn = $pdo->open();
                    try {
                        $stmt = $conn->prepare("SELECT id, name, cat_slug, status, creation_on FROM industries ORDER BY creation_on DESC");
                        $stmt->execute();
                        foreach($stmt as $row) {
                            echo '<li><a href="list?cat_slug=' . $row['cat_slug'] . '">' . $row['name'] . '</a></li>';
                        }
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                    $pdo->close();
                    ?>
                </ul>
            </li>
            <li><a href="advertising"><span>Other Services</span></a></li>
            <?php
            if(!isset($_SESSION['user'])){
            ?>
            <li><a class="login-info d-flex align-items-center" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span>Login/Register</span></a></li>
            <li><a class="login-info d-flex align-items-center" data-bs-toggle="modal" href="#exampleModalToggle" role="button"><span>Add Profile</span></a></li>
            <?php } else { ?>
            <li><a href="dashboard"><span>Dashboard</span></a></li>
            <li><a href="select-industry"><span>Add Profile</span></a></li>
            <?php } ?>
            
            <li class="px-3 mobile-menu-btn">
                <?php
                if(!isset($_SESSION['user'])){
                ?>
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle" class="ud-btn btn-thm text-white">Add Profile<i class="fal fa-arrow-right-long"></i></a>
                <?php } else { ?>
                <a href="select-industry" class="ud-btn btn-thm text-white">Add Profile<i class="fal fa-arrow-right-long"></i></a>
                <?php } ?>
            </li>
        </ul>
    </nav>
</div>