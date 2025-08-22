<?php include('header3.php');?>
<?php
	if(isset($_POST['add4'])){
	$p_id=$_POST['profile_id'];

		$conn = $pdo->open();

		try{
		//	$_SESSION['success'] = 'Product Updated Successfully !!';
			for ($i=0; $i < count($_POST['service']) ; $i++){
				$service=$_POST['service'][$i];
				$stmt = $conn->prepare("INSERT INTO profile_services(p_id, service) VALUES (:p_id, :service)");
				$stmt->execute(['p_id'=>$p_id,'service'=>$service]);
				}
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
    <!-- Breadcumb Sections -->
    <section class="pt70 pb40 bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-md-10  position-relative">
                    <div class="bdrs12 p40 p30-md bgc-white mb30">
                        <h3 class="form-title">Business Hours Details</h3>
                        <form method="post" class="form-style1" action="upload-thumbnail" enctype="multipart/form-data">
                            <input type="hidden" name="profile_id" value="<?php echo $p_id;?>">
                             <?php
                                $conn = $pdo->open();
                                try{
                                $stmt = $conn->prepare("SELECT * FROM tbl_day WHERE status='Active'");
                                $cnt=1;
                                $stmt->execute();
                                foreach($stmt as $row){
                            ?> 
                            <div class="row">
                                <label for="validationDefault04 " class="heading-color ff-heading fw600 mb10"><?php echo $row['day'];?></label>
                                <div class="col-md-2">
                                    
                                    <input type="hidden" name="day_id[]" value="<?php echo $row['id'];?>">
                                    <div class="mb-4">
                                        <label for="validationDefault04" class="form-label">Status</label>
                                        <select class="form-select mb-4" name="close_id[]">
                                            <option value="0">Close</option>
                                            <option value="1">Open</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label for="validationDefault04" class="form-label">Open At</label>
                                       <input type="time" class="form-control mb-4"  name="open_at[]" value="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                   <div class="mb-4">
                                        <label for="validationDefault04" class="form-label">Shift</label>
                                        <select class="form-select mb-4" name="day_shift_id[]">
                                            <?php
                                                $conn = $pdo->open();
                                                try{
                                                $stmt = $conn->prepare("SELECT * FROM tbl_shift WHERE status='Active'");
                                                $cnt=1;
                                                $stmt->execute();
                                                foreach($stmt as $row){
                                            ?>
                                            <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
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
                                <div class="col-md-3">
                                    <div class="mb-4">
                                        <label for="validationDefault04" class="form-label">Closed At</label>
                                       <input type="time" class="form-control mb-4" name="close_at[]" value="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                   <div class="mb-4">
                                        <label for="validationDefault04" class="form-label">Shift</label>
                                        <select class="form-select mb-4" name="night_shift_id[]">
                                            <?php
                                                $conn = $pdo->open();
                                                try{
                                                $stmt = $conn->prepare("SELECT * FROM tbl_shift WHERE status='Active'");
                                                $cnt=1;
                                                $stmt->execute();
                                                foreach($stmt as $row){
                                            ?>
                                                <option value="<?php echo $row['id'];?>"><?php echo $row['title'];?></option>
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
                            <?php
                                        }
                                    }
                                    catch(PDOException $e){
                                    echo $e->getMessage();
                                    }

                                    $pdo->close();
                            ?>
                            <div class="d-grid">
                                <button class="ud-btn btn-dark" type="submit" name="submit">Next<i class="fal fa-arrow-right-long"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex align-items-start gap-3 mt-4">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>

<?php include('footer.php');?>