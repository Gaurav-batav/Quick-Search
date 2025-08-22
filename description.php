<?php include('header2.php');?>
<?php
    
    $conn = $pdo->open();

    $slug = $_GET['slug'];

    try{
        $stmt = $conn->prepare("SELECT tbl_profile.*,tbl_profile.id as p_id ,industries.name as i_name,tbl_profile.slug as p_slug,tbl_profile.profile_id as t_id,tbl_profile.state as t_state from tbl_profile join industries on industries.id=tbl_profile.category_id WHERE tbl_profile.slug = :slug and tbl_profile.status='Active'");
        $stmt->execute(['slug' => $slug]);
        $slug = $stmt->fetch();
        
        if(!$slug) {
            throw new Exception("Profile not found");
        }
    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
        exit();
    }
    catch(Exception $e) {
        echo $e->getMessage();
        exit();
    }
    
    //page view
    $stmt = $conn->prepare("UPDATE tbl_profile SET count=count+1 WHERE id=:id");
    $stmt->execute(['id'=>$slug['p_id']]);
?>
    <section class="our-about pt-0 bgc-f7">
        <div class="container">
            <div class="row mt30 wow fadeInUp" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">
                <div class="col-sm-12">
                    <div class="sp-img-content at-sp-v2 mb15-md" >
                        <a class="popup-img preview-img-1 sp-img" href="uploads/original/<?php echo $slug['thumbnail'];?>">
                        <img class="w-100" src="uploads/original/<?php echo $slug['thumbnail'];?>" alt="<?php echo $slug['thumbnail'];?>">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Property All Lists -->
    <section class="pt0 pb90 bgc-f7">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
          <div class="col-lg-8">
            <div class="single-property-content mb30-md">
              <h2 class="sp-lg-title mb0 crlrd"><?php echo $slug['company_name'];?></h2>
              <div class="pd-meta mb1 d-md-flex align-items-center">
                <p class="text fz15 mb-0 pr10 bdrrn-sm"><i class="fas fa-location-dot fz13 pe-2"></i><?php echo $slug['location'];?> <?php echo $slug['city'];?> <?php echo $slug['zipcode'];?></p>
              </div>
              <div class="property-meta d-flex align-items-center">
              </div>
              <div class="agent-meta mt10 mb10 d-md-flex align-items-center">
                   
                    <a class="text fz15 pe-2 bdrr1" href="tel:<?php echo $slug['phone'];?>"><i class="flaticon-call pe-1"></i><?php echo $slug['phone'];?></a>
                    <?php if(!empty($slug['alt_phone'])): ?>
                      <a class="text fz15 pe-2 ps-2 bdrr1" href="tel:<?php echo $slug['alt_phone'];?>"><i class="flaticon-smartphone pe-1"></i><?php echo $slug['alt_phone'];?></a>
                    <?php endif; ?>
                    <?php if(!empty($slug['whatsap_no'])): ?>
                      <a class="text fz15 ps-2" href="https://api.whatsapp.com/send?phone=<?php echo $slug['whatsap_no'];?>" target="_blank"><i class="flaticon-whatsapp pe-1"></i>WhatsApp</a>
                    <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="single-property-content">
              <div class="property-action text-lg-end">
                <div class="d-flex mb20 mb10-md align-items-center justify-content-lg-end">
                  <a class=" icon mr10 " href="tel:<?php echo $slug['phone'];?>" id="firstname"><span class="flaticon-call"></span></a>
                  <?php if(!empty($slug['whatsap_no'])): ?>
                    <a class="icon mr10" href="https://api.whatsapp.com/send?phone=<?php echo $slug['whatsap_no'];?>" target="_blank" id="secondname"><span class="flaticon-whatsapp"></span></a>
                  <?php endif; ?>
                  <a class="icon mr10" href="mailto:<?php echo $slug['email'];?>"><span class="flaticon-email"></span></a>
                  <?php if(!empty($slug['google'])): ?>
                    <a class="icon mr10" href="<?php echo $slug['google'];?>" target="_blank"><span class="flaticon-maps"></span></a>
                  <?php endif; ?>
                  <input type="text" value="https://quicksearchonline.in/description?slug=<?php echo $_GET['slug'];?>" id="myInput" hidden>
                  <a class="icon" data-bs-toggle="modal" onclick="myFunction()"><span class="fal fa-arrow-right-long"></span></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row wrap mt10 wow fadeInUp" data-wow-delay="500ms">
          <div class="col-lg-8">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb10 crlblu">Connect With Social Media</h4>
              <div class="social-widget">
                <div class="social-style1">
                  <?php if(!empty($slug['fb'])): ?>
                    <a href="<?php echo $slug['fb'];?>" target="_blank"><i class="fab fa-facebook-f list-inline-item"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($slug['insta'])): ?>
                    <a href="<?php echo $slug['insta'];?>" target="_blank"><i class="fab fa-instagram list-inline-item"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($slug['youtube'])): ?>
                    <a href="<?php echo $slug['youtube'];?>" target="_blank"><i class="fab fa-youtube list-inline-item"></i></a>
                  <?php endif; ?>
                  <?php if(!empty($slug['linkdin'])): ?>
                    <a href="<?php echo $slug['linkdin'];?>" target="_blank"><i class="fab fa-linkedin-in list-inline-item"></i></a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
            
            <?php if(!empty($slug['description'])): ?>
             <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb10 crlblu">About Us</h4>
              <p class="text mb10"><?php echo $slug['description'];?></p>
              <div class="agent-single-accordion">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                  <div class="accordion-item">
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30 crlblu">Products & Services</h4>
              <div class="row">
                <ul class="row dropdown-megamenu">
                  <?php
                    try {
                        $stmt = $conn->prepare("SELECT * FROM profile_services WHERE p_id=:p_id ORDER BY creation_on DESC");
                        $stmt->execute(['p_id' => $slug['t_id']]);
                        foreach($stmt as $row) {
                  ?>
                    <li class="col-12 col-md-4 mega_menu_list">
                      <ul>
                        <li>
                        <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i><?php echo $row['service'];?></p></li>
                      </ul>
                    </li>
                  <?php 
                        }
                    } catch(PDOException $e) {
                        echo $e->getMessage();
                    }
                  ?>
                </ul>
              </div>
            </div>
            
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30 crlblu">Photo Gallery</h4>
            <div class="row mb30 mt30 wow fadeInUp" data-wow-delay="300ms">
              <?php
                $conn = $pdo->open();
                try {
                  $stmt = $conn->prepare("SELECT * FROM product_images WHERE profile_id = ?");
                  $stmt->execute([$slug['t_id']]);
                  $images = $stmt->fetchAll();
                  foreach ($images as $i => $row2) {
                    if ($i == 6) echo '<div id="moreImages" style="display:none;">';
              ?>
              <div class="col-sm-6 col-lg-4">
                <div class="blog-style1">
                  <div class="blog-img" style="justify-content: center;background-position: center;">
                    <a class="popup-img preview-img-2 sp-img mb10" href="uploads/original/<?php echo $row2['large_path']; ?>">
                      <img src="uploads/medium/<?php echo $row2['medium_path']; ?>" alt="">
                    </a>
                  </div>
                </div>
              </div>
              <?php
                         
                  }
                  if (count($images) > 6) {
                      echo '</div>'; // Close the image grid container
                      echo '<div class="d-flex justify-content-center mt-3">';
                      echo '<a href="photo_gallery.php?profile_id=' . urlencode($slug['t_id']) . '" class="ud-btn btn-thm py-2 px-5" style="font-size: 14px;">View More</a>';
                      echo '</div>';
                  }
                    } catch (PDOException $e) {
                  echo $e->getMessage();
                }
                $pdo->close();
              ?>
              </div>
            </div>
                     
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 pb5 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30 crlblu">Business Hours</h4>
              <div class="row">
                <div class="col-sm-6 col-md-6">
                  <div class="ui-content">
                    <div class="table-style1 table-responsive mb-4 mb-lg-5">
                      <table class="table table-borderless">
                        <tbody>
                          <?php
                            try {
                              $stmt = $conn->prepare("SELECT tbl_business_hrs.*, tbl_day.day 
                                                     FROM tbl_business_hrs 
                                                     JOIN tbl_day ON tbl_day.id = tbl_business_hrs.day_id 
                                                     LEFT JOIN tbl_close_status ON tbl_close_status.type_id = tbl_business_hrs.close_id 
                                                     WHERE tbl_business_hrs.profile_id = :profile_id 
                                                     ORDER BY tbl_business_hrs.day_id");
                              $stmt->execute(['profile_id' => $slug['t_id']]);
                              foreach($stmt as $row) {
                          ?> 
                          <tr>
                            <td><?php echo $row['day'];?></td>
                            <?php if($row['close_id'] == '0'): ?>
                              <td>Close</td>
                            <?php else: ?>
                              <td><?php echo $row['open_at'];?> to <?php echo $row['close_at'];?></td>
                            <?php endif; ?>
                          </tr>
                          <?php
                              }
                            } catch(PDOException $e) {
                              echo $e->getMessage();
                            }
                          ?>
                        </tbody>
                      </table>                
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <div class="row">
                <div class="col-md-12">
                  <div class="product_single_content">
                    <div class="mbp_pagination_comments">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="total_review d-flex align-items-center justify-content-between mb20">
                            <h6 class="fz17 mb15 crlblu"><i class="fas fa-star fz12 pe-2"></i>
                            <?php
                              $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM tbl_review WHERE p_id=:p_id");
                              $stmt->execute(['p_id' => $slug['p_id']]);
                              $urow = $stmt->fetch();
                              echo "<span>".$urow['total']."</span>";?> reviews</h6>
                          </div>
                        </div>
                        <?php
                          try {
                            $stmt = $conn->prepare("SELECT * FROM tbl_review WHERE p_id=:p_id");
                            $stmt->execute(['p_id' => $slug['p_id']]);
                            foreach ($stmt as $row2) {
                        ?>
                        <div class="col-md-12">
                          <div class="mbp_first position-relative d-flex align-items-center justify-content-start mb30-sm">
                            <img src="image/user.png" class="mr-3" alt="user" width="30">
                            <div class="ml20">
                              <h6 class="mt-0 mb-0 crlblu"><?php echo $row2['title'];?></h6>
                              <div><span class="fz14"><?php echo $row2['creation_on'];?></span>
                                <div class="blog-single-review">
                                  <ul class="mb0 ps-0">
                                    <?php for($i=1; $i<=5; $i++): ?>
                                      <li class="list-inline-item me-0">
                                        <a href="#">
                                          <i class="fas fa-star <?php echo ($i <= $row2['rating']) ? 'review-color2' : ''; ?> fz10"></i>
                                        </a>
                                      </li>
                                    <?php endfor; ?>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <p class="text mt20 mb20"><?php echo $row2['description'];?></p>
                        </div>
                        <?php 
                            }
                          } catch(PDOException $e) {
                            echo $e->getMessage();
                          }
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
              <h4 class="title fz17 mb30 crlblu">Leave a Review</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bsp_reveiw_wrt">
                    <center><div id="response1" class="col-md-12"></div></center>
                    <form id="ajaxForm1" method="post" class="comments_form">
                        <input type="hidden" name="p_id" value="<?php echo $slug['p_id'];?>">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="mb-4">
                            <label class="fw600 ff-heading mb-2">Email</label>
                            <input type="email" name="email" value="<?php echo isset($user['email']) ? $user['email'] : '';?>" class="form-control" placeholder="Enter Email Address" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-4">
                            <label class="fw600 ff-heading mb-2">Name</label>
                            <input type="text" name="title" value="<?php echo isset($user['name']) ? $user['name'] : '';?>" class="form-control" placeholder="Enter Title" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="widget-wrapper sideborder-dropdown psp-review mb-4">
                            <label class="fw600 ff-heading mb-2">Rating</label>
                            <div class="form-style2 input-group">
                              <select class="selectpicker" name="rating" data-live-search="true" data-width="100%" required>
                                <option value="">Select</option>
                                <option value="5">Five Star</option>
                                <option value="4">Four Star</option>
                                <option value="3">Three Star</option>
                                <option value="2">Two Star</option>
                                <option value="1">One Star</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="mb-4">
                            <label class="fw600 ff-heading mb-2">Review</label>
                            <textarea class="pt15" name="description" rows="6" placeholder="Write a Review" required></textarea>
                          </div>
                          <button type="submit" class="ud-btn btn-white2">Submit Review<i class="fal fa-arrow-right-long"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4">
            <div class="column">
              <div class="default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-relative">
                <h4 class="form-title mb5 crlrd">Enquiry Now</h4>
                <p class="text">Choose your preferred day</p>
                <div class="">
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-inperson" role="tabpanel" aria-labelledby="pills-inperson-tab">
                         <div id="response"></div>
                       <form id="ajaxForm" method="post" class="form-style1">
                           <input type="hidden" value="<?php echo $slug['p_id'];?>" name="p_id">
                           <input type="hidden" value="<?php echo $slug['franchise_id'];?>" name="f_id">
                           <input type="hidden" value="<?php echo $slug['executive_id'];?>" name="e_id">
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="mb20">
                              <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Name" required>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="mb20">
                              <input type="text" class="form-control" id="mobile_no" name="mobile_no" placeholder="Enter Your Mobile No." required>
                            </div>
                          </div>
                         
                          <div class="col-md-12">
                            <div class="d-grid">
                              <button type="submit" class="ud-btn btn-thm">Send Request<i class="fal fa-arrow-right-long"></i></button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php include('footer.php');?>

<script>
function showMoreImages() {
  document.getElementById('moreImages').style.display = 'flex';
  event.target.style.display = 'none';
}

$(document).ready(function() {
    $('#ajaxForm').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'process.php',
            type: 'post',
            data: $(this).serialize(),
            success: function(response) {
                $('#response').html(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#response').html('<p style="color:red;">An error occurred: ' + textStatus + '</p>');
            }
        });
    });
    
    $('#ajaxForm1').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: 'add-review.php',
            type: 'post',
            data: $(this).serialize(),
            success: function(response) {
                $('#response1').html(response);
                if(response.includes('successfully')) {
                    $('#ajaxForm1')[0].reset();
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                $('#response1').html('<p style="color:red;">An error occurred: ' + textStatus + '</p>');
            }
        });
    });
});

function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999);
  navigator.clipboard.writeText(copyText.value);
  alert("Copied the text: " + copyText.value);
}
</script>