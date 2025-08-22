<?php
session_start(); // Start the session
include 'includes/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars(trim($_POST['name']));
    $contact_info = htmlspecialchars(trim($_POST['contact_info']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password = htmlspecialchars(trim($_POST['password']));
    $status = 'Active';

    // Validate the inputs
    if (empty($name) || empty($contact_info) || empty($email) || empty($password)) {
        echo json_encode(['status' => 'error', 'message' => 'All fields are required!']);
        exit();
    } elseif (!preg_match('/^[0-9]{10}$/', $contact_info)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid mobile number format!']);
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'error', 'message' => 'Invalid email format!']);
        exit();
    } else {
        // Prepare statement to check if the email or contact info already exists
        $stmt = $conn->prepare("SELECT * FROM users WHERE email=? OR contact_info=?");
        $stmt->bind_param("ss", $email, $contact_info);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo json_encode(['status' => 'error', 'message' => 'Email or mobile number already exists!']);
            exit();
        } else {
            // Hash the password for security
            //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            // Prepare statement to insert the new user into the database
            $stmt = $conn->prepare("INSERT INTO users (name, contact_info, email, password, status) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $name, $contact_info, $email, $password, $status);
            if ($stmt->execute()) {
                // Auto-login after registration
                $_SESSION['user'] = $stmt->insert_id; // Get the last inserted ID
               // $_SESSION['user'] = $id; // Store the user's name in the session
               // $_SESSION['user'] = $email;
                echo json_encode(['status' => 'success', 'message' => 'Registration successful! You are now logged in.']);
                exit();
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Registration failed, please try again.']);
                exit();
            }
        }
        $stmt->close();
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method!']);
    exit();
}
?>