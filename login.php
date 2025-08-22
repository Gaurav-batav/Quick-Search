<?php
session_start();
$_SESSION["err"] = "";
if (isset($_POST["submit"])) {
    $contact_info = $_POST["contact_info"];
    $password = $_POST["password"];

    $host = "localhost";
    $user = "quicksea_new";
    $pass = "eBJ36(0vnZVy";
    $database = "quicksea_new";

    $conn = mysqli_connect($host, $user, $pass, $database);

    $contact_info = mysqli_real_escape_string($conn, $contact_info);
    $password = mysqli_real_escape_string($conn, $password);


    $get_current_user_details = "SELECT * FROM users WHERE contact_info = '$contact_info' AND password = '$password' LIMIT 1";
	$execute_user_details_command = mysqli_query($conn, $get_current_user_details);
    $get_additional_info = mysqli_fetch_assoc($execute_user_details_command);
	$id = $get_additional_info["id"];
	$franchise_id = $get_additional_info['franchise_id'];
    $users_name = $get_additional_info["name"];
    $users_email = $get_additional_info["email"];
   // $users_status = $get_additional_info["status"];
	//$users_year = $get_additional_info["year"];
	$id = $get_additional_info['id'];
    $command_query = "SELECT * FROM users WHERE contact_info = '$contact_info' AND Password = '$password' AND name = '$users_name'";
	
    $execute_command_query = mysqli_query($conn, $command_query);

    $user_validity = mysqli_num_rows($execute_command_query);

    if ($user_validity > 0) {

        $checking_online_status = "SELECT * FROM users_online WHERE contact_info='$contact_info' AND name = '$users_name'";
		
        $execute_checking_online_status = mysqli_query($conn, $checking_online_status);

        $online_status_validity = mysqli_num_rows($execute_checking_online_status);

        if ($online_status_validity > 0) {
			$_SESSION['id'] = $id; 
			//$_SESSION['position'] = $position;
			setcookie("id", $id,time() + (86400 * 30));
            setcookie("user_contact_info", $contact_info, time() + (86400 * 30));
            setcookie("users_name", $users_name, time() + (86400 * 30));
           // setcookie("user_department", $users_department, time() + (86400 * 30));
           // setcookie("user_position", $users_position, time() + (86400 * 30));
		//	setcookie("user_year", $users_year, time() + (86400 * 30));
			
            setcookie("default_clicked_on_username", "Welcome", time() + (86400 * 30));

            setcookie("clicked_on_user_last_name", $users_name, time() + (86400 * 30));

            setcookie("Selected_Username_Table", "dummy_text", time() + (86400 * 30));
            setcookie("Reversed_selected_Username_Table", "dummy_text", time() + (86400 * 30));

            setcookie("selected_Username_Table_uploads", "dummy_text", time() + (86400 * 30));
            setcookie("reversed_selected_Username_Table_uploads", "dummy_text", time() + (86400 *
                30));

            $update_status_command =
                "UPDATE `users_online` SET status = 'online' WHERE contact_info ='$contact_info' AND name = '$users_name'";
            $execute_status_command = mysqli_query($conn, $update_status_command);


            header("Location:index.php");

        } else {

            $insert_command = "INSERT INTO users_online (`id`, `contact_info`,`name`, `Time`,`status`) VALUES (NULL, '$contact_info','$users_name', CURRENT_TIMESTAMP,'online')";

            $execute_insert_command = mysqli_query($conn, $insert_command);

            $UserID = mysqli_insert_id($conn);
             mysqli_close($conn);
			$_SESSION['id'] = $id; 
		//	$_SESSION['position'] = $position;
			setcookie("id", $id,time() + (86400 * 30));
            setcookie("user_contact_info", $contact_info, time() + (86400 * 30));
            setcookie("users_name", $users_name, time() + (86400 * 30));
           // setcookie("user_department", $users_department, time() + (86400 * 30));
           // setcookie("user_position", $users_position, time() + (86400 * 30));
		//	setcookie("user_year", $users_year, time() + (86400 * 30));
			
            setcookie("default_clicked_on_username", "Welcome", time() + (86400 * 30));

            setcookie("clicked_on_user_last_name", $users_name, time() + (86400 * 30));

            setcookie("Selected_Username_Table", "dummy_text", time() + (86400 * 30));
            setcookie("Reversed_selected_Username_Table", "dummy_text", time() + (86400 * 30));

            setcookie("selected_Username_Table_uploads", "dummy_text", time() + (86400 * 30));
            setcookie("reversed_selected_Username_Table_uploads", "dummy_text", time() + (86400 *
                30));

            header("Location:index.php");
        }

    } else {
        $_SESSION["err"] = "<h6 style='color:#fff'>The username you entered doesn't belong to an account. Please check your username and try again.</h6>";
    }
    
} else {

}


?>