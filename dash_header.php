<?php include 'includes/session.php'; ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- page-dashboard-properties12:34:12-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
<meta name="description" content="Homez - Real Estate HTML Template">
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
<link rel="stylesheet" href="css/dashbord_navitaion.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Homez - Real Estate HTML Template</title>
<!-- Favicon -->
<link href="images/logo/fav.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/logo/fav.png" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="images/logo/fav.png" sizes="60x60" rel="apple-touch-icon">
<link href="images/logo/fav.png" sizes="72x72" rel="apple-touch-icon">
<link href="images/logo/fav.png" sizes="114x114" rel="apple-touch-icon">
<link href="images/logo/fav.png" sizes="180x180" rel="apple-touch-icon">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="wrapper">
  
  <!-- Main Header Nav -->
  <header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr"> 
      <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
        <div class="row align-items-center justify-content-between">
          <div class="col-6 col-lg-auto">
            <div class="text-center text-lg-start d-flex align-items-center">
              <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                <a href="index" class="logo"><img src="images/logo/logo2.png" height="70" alt=""></a>
              </div>
              <div class="fz20 ms-2 ms-xl-5">
                <a href="#" class="dashboard_sidebar_toggle_icon text-thm1 vam"><img src="images/dark-nav-icon.svg" alt=""></a>
              </div>
            </div>
          </div>
          <div class="d-none d-lg-block col-lg-auto">
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
          <div class="col-6 col-lg-auto">
            <div class="text-center text-lg-end header_right_widgets">
              <ul class="mb0 d-flex justify-content-center justify-content-sm-end p-0">
                <li class="d-none d-sm-block"><a class="text-center mr20 notif" href="select-industry" title="Add Profile"><span class="flaticon-plus"></span>+</a></li>
                <li class=" user_setting">
                  <div class="dropdown">
                    <a class="btn" href="#" data-bs-toggle="dropdown">
                      <img src="images/resource/user.png" alt="user.png"> 
                    </a>
                    <div class="dropdown-menu">
                      <div class="user_setting_content">
                        <p class="fz15 fw400 ff-heading mt30">MANAGE ACCOUNT</p>
                        <a class="dropdown-item" href="my-profile"><i class="flaticon-user mr10"></i>My Profile</a>
                        <a class="dropdown-item" href="logout"><i class="flaticon-exit mr10"></i>Logout</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>