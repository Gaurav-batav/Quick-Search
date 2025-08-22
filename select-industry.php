<?php include('header3.php');
?>
 <head>
        <title>Select Industry | Quick Search Online </title>
        <meta name="description" content="">
        <meta name="keyword" content="">
</head>

    <!-- Breadcumb Sections -->
    <section class="pt70 pb40 bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Select Industry</h3>
              <p class="text mb25">Fill required details</p>
              <form class="form-style1" method="POST" action="personal-detail">
                <div class="row">
                    <input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
                    <input type="hidden" name="profile_id" value="qso<?php echo random_int(10000, 99999);?>">
                    <div class="col-lg-12">
                        <div class="mb20">
                            <label class="heading-color ff-heading fw600 mb10">Main Industry <span class="text-red">* </span></label>
                            <div class="location-area">
                                <select class="selectpicker" name="category_id" onChange="getcat(this.value);" data-live-search="true" data-width="100%" required>
                                    <option value="">Select Category</option>
                                    <?php
                                        $conn = $pdo->open();
                    
                                        try{
                                        $stmt = $conn->prepare("SELECT * FROM industries Order By creation_on DESC");
                                        $cnt=1;
                                        $stmt->execute();
                                        foreach($stmt as $row){
                                       
                                    ?>
                                    <option value="<?php echo $row['id'];?>"><?php echo $row['name'];?></option>
                                    <?php 
                                              }
                                        }
                                    catch(PDOException $e){
                                      echo $e->getMessage();
                                        }
                                        
                                    $pdo->close();
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb20">
                            <label class="heading-color ff-heading fw600 mb10">Sub-Industry<span class="text-red">* </span></label>
                            <div class="location-area">
                                <select class="form-control" name="sub_category_id" id="category" data-live-search="true" data-width="100%" required>
                                </select>
                                <!--<select class="form-control" name="sub_category_id" id="category" required>
                                </select>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-grid">
                            <button class="ud-btn btn-dark" type="submit" name="add"><i class="fal fa-arrow-right-long"></i> Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
<?php include('footer.php');?>
<script>
function getcat(val) {
$.ajax({
type: "POST",
url: "get_cat.php",
data:'cat_id='+val,
success: function(data){
$("#category").html(data);
}
});
}
function selectCountry(val) {
$("#search-box").val(val);
$("#suggesstion-box").hide();
}
</script>  