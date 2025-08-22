<?php include('header3.php');?>
    <!-- Breadcumb Sections -->
 <?php
	if(isset($_POST['add3'])){
	$profile_id=$_POST['profile_id'];
	$fb=$_POST['fb'];
	$google=$_POST['google'];
	$linkdin=$_POST['linkdin'];
	$youtube=$_POST['youtube'];
	$insta=$_POST['insta'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET profile_id=:profile_id, fb=:fb, google=:google, linkdin=:linkdin, youtube=:youtube, insta=:insta WHERE profile_id=:profile_id");
			$stmt->execute(['profile_id'=>$profile_id, 'fb'=>$fb, 'google'=>$google, 'linkdin'=>$linkdin, 'youtube'=>$youtube, 'insta'=>$insta]);
		//	$_SESSION['success'] = 'Product Updated Successfully !!';
		
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';
	}

	//header('location: addprofile-step4.php');

?>   
 <section class="pt70 pb40 bgc-f7">
     
      <div class="container">
        <div class="row">
          <div class="col-md-6 offset-md-3 position-relative">
            <div class="home8-contact-form bdrs12 p40 p30-md bgc-white mb30">
              <h3 class="form-title">Product & Services</h3>
              <p class="text mb25"><span class="text-red">* </span> 1 Mandatory to fill </p>
              <form class="form-style1" method="POST" action="business-hrs">
                <div class="row">
                    <input type="hidden" name="profile_id" value="<?php echo $profile_id;?>">
                     <table  class="table table-hover small-text" id="tb1">
                                                <tr class="tr-header col-md-12">
                                                    <th>  <span type="button" class="text-red" data-bs-toggle="modal" id="addMore1" data-bs-target="#" style="color:red"><i class="ri-add-line align-bottom me-1" ></i>Add More +</span></th>
                                                    <th> <label class="heading-color ff-heading fw600 mb10">Enter your Product or Services</label> </th>
                                                </tr>
                                                <tr class="col-md-12">
                                                    <td>
                                                        <a href='javascript:void(0);'  class='remove1'>x</a>
                                                    </td>
                                                    <td class="col-md-8" id="hidding_normal">
                                                        <input class="form-control" name="service[]" type="text" placeholder="Enter Product & Services" required>
                                                        <div class="invalid-feedback">
                                                    Please Product & Services
                                                        </div>
                                                    </td>    
                                                </tr> 
                                            </table>
                  
                  <div class="col-md-12">
                    <div class="d-grid ">
                        <button class="ud-btn btn-dark" type="submit" name="add4">Next<i class="fal fa-arrow-right-long"></i></button>
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
$(function(){
$('#addMore1').on('click', function() {
var data = $("#tb1 tr:eq(1)").clone(true).appendTo("#tb1");
data.find("input").val('');
});
$(document).on('click', '.remove1', function() {
var trIndex = $(this).closest("tr").index();
if(trIndex>1) {
$(this).closest("tr").remove();
} else {
alert("Sorry!! Can't remove first row!");
}
});
});      
</script>