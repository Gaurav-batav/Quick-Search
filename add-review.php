<?php
include'includes/config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = htmlspecialchars($_POST['email']);
    $title = htmlspecialchars($_POST['title']);
    $rating = htmlspecialchars($_POST['rating']);
    $p_id = htmlspecialchars($_POST['p_id']);
    $description = htmlspecialchars($_POST['description']);

    // Validate the inputs
    if (empty($email) || empty($title) || empty($email) || empty($rating) | empty($p_id) ) {
        echo 'Name and mobile no are required!';
    } elseif (!filter_var($email)) {
        echo 'Invalid Email  format!';
    } else {
        // Process the data (e.g., save to database, send email, etc.)
        $sql=mysqli_query($conn,"insert into tbl_review(p_id, email, title, rating, description) values('$p_id','$email','$title','$rating','$description')");
        echo '<p class="ud-btn btn-thm col-md-12" >Review Add Successfully</p>';
       // echo '<br>Name: ' . $name;
      //  echo '<br>Email: ' . $email;
    }
} else {
    echo 'Invalid request method!';
}
?>


