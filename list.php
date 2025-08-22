<?php include('header2.php');?>
<?php
    // Initialize variables to avoid undefined warnings
    $cat_slug = isset($_GET['cat_slug']) ? $_GET['cat_slug'] : '';
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    $city = isset($_GET['city']) ? $_GET['city'] : '';
    
    $conn = $pdo->open();
    $cat = [];
    $catid = 0;

    try{
        $stmt = $conn->prepare("SELECT * FROM industries WHERE cat_slug = :cat_slug");
        $stmt->execute(['cat_slug' => $cat_slug]);
        $cat = $stmt->fetch();
        $catid = $cat['id'] ?? 0;
    }
    catch(PDOException $e){
        echo "There is some problem in connection: " . $e->getMessage();
    }
?>
    <!-- Breadcumb Sections -->
    <section class="section bgc-f7 p10">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h3 class="title"><?php echo htmlspecialchars($cat['name'] ?? 'Category');?></h3>
              <a href="#" class="filter-btn-left mobile-filter-btn d-block d-lg-none"><span class="flaticon-settings"></span> Filter</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Property All Lists -->
    <section class="pt0 pb90 bgc-f7">
      <div class="container">
        <div class="row gx-xl-5">
          <div class="col-lg-4 d-none d-lg-block">
            <div class="list-sidebar-style1">
              <div class="widget-wrapper">
                <h6 class="list-title">Find Business</h6>
                <div class="form-search position-relative">
                <div class="search_area">
                  <input class="form-control" value="<?php echo htmlspecialchars($search);?>" type="text" id="search" name="search" placeholder="Enter Keyword">
                    <label><span class="flaticon-search"></span></label>
                </div>
                <div class="search_area mt-2">
                  <input class="form-control" type="text" value="<?php echo htmlspecialchars($city);?>" id="city" name="city" placeholder="Enter Location">
                  <label><span class="flaticon-location"></span></label>
                </div>
                 <div class="widget-wrapper mt-2">
                <div class="btn-area d-grid align-items-center">
                  <button class="ud-btn btn-thm" onclick="submitForm()" type="submit" name="filter"><span class="flaticon-search align-text-top pr10"></span>Search</button>
                </div>
              </div>
                </div>
              </div>
                <div class="widget-wrapper">
                    <h6 class="list-title">Main Category</h6>
                    <div class="checkbox-style1">
                    <?php
                    $conn = $pdo->open();
    
                    try{
                    $stmt = $conn->prepare("SELECT * FROM industries Order By rand() DESC LIMIT 4");
                    $cnt=1;
                    $stmt->execute();
                    foreach($stmt as $row){
                    ?>
                    <label class="custom_checkbox"><a href="list?cat_slug=<?php echo htmlspecialchars($row['cat_slug']);?>"><?php echo htmlspecialchars($row['name']);?></a>
                      </label>
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
              <div class="reset-area d-flex align-items-center justify-content-between">
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="row align-items-center mb20">
              <div class="col-sm-6">
                <div class="text-center text-sm-start">
                  <p class="pagination_page_count mb-0">Showing 
                  <?php
                     $conn = $pdo->open();
                     $stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM tbl_profile WHERE category_id = :catid AND status='Active'");
                     $stmt->execute(['catid' => $catid]);
                     $urow = $stmt->fetch();
                     echo $urow['numrows'] ?? 0; ?> results</p>
                </div>
              </div>
              
            </div>
            <div class="row mt15">
                <?php
                $conn = $pdo->open();

                try{
                    $stmt = $conn->prepare("SELECT tbl_profile.*, tbl_profile.id as p_id, industries.name as i_name, tbl_profile.slug as p_slug, tbl_profile.profile_id as t_id, tbl_profile.state as t_state FROM tbl_profile JOIN industries ON industries.id=tbl_profile.category_id WHERE tbl_profile.category_id= :catid AND tbl_profile.status='Active'");
                    $stmt->execute(['catid' => $catid]);
                    foreach ($stmt as $row) {
                ?>
              <div class="col-lg-12">
                <div class="listing-style1 listing-type">
                  <div class="list-thumb flex-shrink-0">
                    <a href="description?slug=<?php echo htmlspecialchars($row['slug']);?>">
                        <img style="width:250px;height:250px" src="uploads/original/<?php echo htmlspecialchars($row['thumbnail']);?>" alt="<?php echo htmlspecialchars($row['company_name']);?>">
                        </a>
                  </div>
                  <div class="list-content flex-shrink-1">
                    <h6 class="list-title"><a href="description?slug=<?php echo htmlspecialchars($row['slug']);?>"><?php echo htmlspecialchars($row['company_name']);?></a></h6>
                    <div class="agent-meta mt10 mb10 d-md-flex align-items-center">
                     <p class="list-text mb-0 me-4"><?php echo htmlspecialchars($row['city']);?>
                     <?php
                        $conn_state = $pdo->open();
                        try{
                            $stmt_state = $conn_state->prepare("SELECT * FROM tbl_states WHERE state_id=:state_id");
                            $stmt_state->execute(['state_id' => $row['t_state']]);
                            $state = $stmt_state->fetch();
                            if($state) {
                                echo htmlspecialchars($state['state_name']);
                            }
                        }
                        catch(PDOException $e){
                            // Handle error silently
                        }
                        $pdo->close();
                    ?>
                    </p>
                    </div>
                    <span><?php echo substr(htmlspecialchars($row['description']), 0, 250) . '...';?></span>
                     <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                        <a id="thirdname" href="description?slug=<?php echo htmlspecialchars($row['slug']);?>"><span class="fal fa-arrow-right-long"></span></a>
                      <div class="icons d-flex align-items-center">
                        <a id="firstname" href="tel:<?php echo htmlspecialchars($row['phone']);?>"><span class="flaticon-call"></span></a>
                        <a id="secondname" href="https://api.whatsapp.com/send?phone=<?php echo htmlspecialchars($row['whatsap_no']);?>" target="_blank"><span class="flaticon-whatsapp"></span></a>
                        <a href="mailto:<?php echo htmlspecialchars($row['email']);?>"><span class="flaticon-email"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
                    }
                }
                catch(PDOException $e){
                    echo "There is some problem in connection: " . $e->getMessage();
                }
                $pdo->close();
                ?> 
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include('footer.php');?>