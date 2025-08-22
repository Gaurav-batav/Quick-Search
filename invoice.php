<!DOCTYPE html>
<html dir="ltr" lang="en">

<!-- page-invoice12:34:27-->
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
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/jquery-ui.min.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- Title -->
<title>Homez - Real Estate HTML Template</title>
<!-- Favicon -->
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/favicon.ico" sizes="128x128" rel="shortcut icon" />
<!-- Apple Touch Icon -->
<link href="images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
<link href="images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
<link href="images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="bgc-f7">
<div class="wrapper ovh">
  <div class="preloader"></div>
  <div class="body_content">
    <!-- Our Invoice Page -->
    <section class="our-invoice bgc-gmart-gray pb200">
      <div class="container wow fadeInUp" data-wow-delay="300ms">
        <div class="row mb30">
          <div class="col-lg-12">
            <div class="float-end">
              <a href="#" class="ud-btn btn-dark invoice_down_print" onclick="window.print()">Download Invoice<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
         <?php
                    include'includes/config.php';
                    $id=intval($_GET['id']);
                    $query=mysqli_query($conn,"SELECT tbl_profile.*,tbl_profile.id as p_id,tbl_states.state_name as s_name,tbl_states.state_id as sid,sub_industries.name as i_name ,sub_industries.id as s_id,tbl_profile.creation_on as t_creation_on, tbl_profile.user_id from tbl_profile join tbl_states on tbl_states.state_id=tbl_profile.state join sub_industries on sub_industries.id=tbl_profile.sub_category_id WHERE tbl_profile.id='$id'");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
        <div class="row">
          <div class="col-lg-12">
            <div class="invoice_table">
              <div class="wrapper">
                <div class="row mb20 align-items-center">
                  <div class="col-lg-7">
                    <div class="main_logo mb30-md"><img src="images/logo/logo.png" alt="" height="70"></div>
                  </div>
                  <div class="col-lg-5">
                    <div class="invoice_deails">
                      <!--<h4 class="float-start">Invoice #</h4>
                      <h6 class="float-end">0043128641</h6>-->
                    </div>
                  </div>
                </div>
                <div class="row mt55">
                  <div class="col-sm-6 col-lg-7">
                    <div class="invoice_date mb60">
                      <div class="title mb5 ff-heading">Invoice date:</div>
                      <h6 class="fw400 mb0"><?php echo $row['t_creation_on'];?></h6>
                    </div>
                    <div class="invoice_address">
                      <h6 class="mb20">Supplier</h6>
                      <h6 class="fw400">Quick Search Online</h6>
                      <p class="body-light-color ff-heading">Flat No 5, Koyana Tenant Housing Society, Plot No. A2/2,<br class="d-none d-lg-block">Jakhinwadi Road, Koyanavasahat karad - 415539.</p>
                      <p class="body-light-color ff-heading">GST 27AEEPY0959E1Z7</p>
                    </div>
                  </div>
                  <div class="col-sm-6 col-lg-5">
                    <div class="invoice_date mb60">
                      <div class="title mb5 ff-heading">Expiry date:</div>
                      <h6 class="fw400 mb0"><?php echo (new DateTime($row['creation_on']))->modify('+1 year')->format('Y-m-d'); ?></h6>
                    </div>
                    
                    <div class="invoice_address">
                      <h6 class="mb20">Customer</h6>
                      <h6 class="fw400"><?php echo $row['company_name'];?></h6>
                      <p class="body-light-color ff-heading"><?php echo $row['location'];?><br class="d-none d-lg-block"><?php echo $row['zipcode'];?>, <?php echo $row['city'];?>.</p>
                       <!--<p class="body-light-color ff-heading">GST 27AEEPY0959E1Z7</p>-->
                    </div>
                  
                  </div>
                </div>
                <div class="row mt50">
                  <div class="col-lg-12">
                    <div class="table-responsive invoice_table_list">
                      <table class="table table-borderless">
                        <thead class="thead-light">
                          <tr class="tblh_row">
                            <th class="tbleh_title" scope="col">Description</th>
                            <th class="tbleh_title" scope="col">Price</th>
                            <th class="tbleh_title" scope="col">GST (18%)</th>
                            <th class="tbleh_title" scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="bdrb1">
                            <th class="tbl_title" scope="row">Standard Plan</th>
                            <td class="tbl_title">₹ 2,000.00</td>
                            <td class="tbl_title">-</td>
                            <td class="tblpr_title">₹ 2,000.00</td>
                          </tr>
                          
                          <tr>
                            <th scope="row" class="tblp_title">Total Due</th>
                            <td></td>
                            <td></td>
                            <td class="tblp_title">₹ 2,000.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="invoice_footer">
                <div class="row justify-content-center">
                  <div class="col-auto">
                    <div class="invoice_footer_content text-center">
                      <a class="ff-heading" href="#">www.quicksearchonline.com</a>
                    </div>
                  </div>
                  <!--<div class="col-auto">
                    <div class="invoice_footer_content text-center">
                      <a class="ff-heading" href="#">invoice@realton.com</a>
                    </div>
                  </div>-->
                  <div class="col-auto">
                    <div class="invoice_footer_content text-center">
                      <a class="ff-heading" href="#">(123) 123-456</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
  </div>
</div>
<!-- Wrapper End --> 
<script src="js/jquery-3.6.4.min.js"></script>
<script src="js/jquery-migrate-3.0.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-scrolltofixed-min.js"></script>
<script src="js/wow.min.js"></script>
<!-- Custom script for all pages --> 
<script src="js/script.js"></script>
</body>

<!-- page-invoice12:34:27-->
</html>