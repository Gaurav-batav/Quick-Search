<?php
include'includes/session.php';
	include 'includes/slugify.php';
	if(isset($_POST['update'])){
	$id=$_POST['id'];
	$company_name=$_POST['company_name'];
	$slug = slugify($company_name);
	$experience=$_POST['experience'];
	$contact_person=$_POST['contact_person'];
	$phone=$_POST['phone'];
	$alt_phone=$_POST['alt_phone'];
	$whatsap_no=$_POST['whatsap_no'];
	$landline_no=$_POST['landline_no'];
	$alt_landline_no=$_POST['alt_landline_no'];
	$email=$_POST['email'];
	$alt_email=$_POST['alt_email'];
	$website=$_POST['website'];
	$gst=$_POST['gst'];
	$state=$_POST['state'];
	$city=$_POST['city'];
	$zipcode=$_POST['zipcode'];
	$location=$_POST['location'];
	$description=$_POST['description'];

		$conn = $pdo->open();

		try{
			$stmt = $conn->prepare("UPDATE tbl_profile SET company_name=:company_name, slug=:slug, experience=:experience, contact_person=:contact_person, phone=:phone, alt_phone=:alt_phone, whatsap_no=:whatsap_no, landline_no=:landline_no, alt_landline_no=:alt_landline_no, email=:email, alt_email=:alt_email, website=:website, gst=:gst, state=:state, city=:city, zipcode=:zipcode, location=:location, description=:description  WHERE id=:id");
			$stmt->execute(['id'=>$id, 'company_name'=>$company_name, 'slug'=>$slug, 'experience'=>$experience, 'contact_person'=>$contact_person, 'phone'=>$phone, 'alt_phone'=>$alt_phone, 'whatsap_no'=>$whatsap_no, 'landline_no'=>$landline_no, 'alt_landline_no'=>$alt_landline_no, 'email'=>$email, 'alt_email'=>$alt_email,  'website'=>$website, 'gst'=>$gst, 'state'=>$state, 'city'=>$city, 'zipcode'=>$zipcode, 'location'=>$location, 'description'=>$description]);
			$_SESSION['success'] = 'Personal Detail Updated Successfully !!';
		}
		catch(PDOException $e){
			$_SESSION['error'] = $e->getMessage();
		}
		
	//	$pdo->close();
	}
	else{
	//	$_SESSION['error'] = 'Fill up edit product form first';
	}

	header('location: active-profile.php');

?>