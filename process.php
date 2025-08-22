<?php
include'includes/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $p_id = htmlspecialchars($_POST['p_id']);
    $f_id = htmlspecialchars($_POST['f_id']);
    $e_id = htmlspecialchars($_POST['e_id']);
     $name = htmlspecialchars($_POST['name']);
    $mobile_no = htmlspecialchars($_POST['mobile_no']);

    // Validate the inputs
    if (empty($name) || empty($mobile_no) ) {
        echo 'Name and mobile no are required!';
    } elseif (!filter_var($mobile_no)) {
        echo 'Invalid mobile no format!';
    } else {
        // Process the data (e.g., save to database, send email, etc.)
        $sql=mysqli_query($conn,"insert into enquiry(p_id, f_id, e_id, name,mobile_no) values('$p_id','$f_id','$e_id','$name','$mobile_no')");
        echo 'Enquiry Send successfully!';
       // echo '<br>Name: ' . $name;
      //  echo '<br>Email: ' . $email;
    }
} else {
    echo 'Invalid request method!';
}
