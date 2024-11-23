<?php
if (isset($_POST['submitted'])) {
    // connect to the database
    require_once('db.php');
    
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $first_name = isset($_POST['first_name']) ? trim($_POST['first_name']) : '';
    $last_name = isset($_POST['last_name']) ? trim($_POST['last_name']) : '';
    $street_address = isset($_POST['street_address']) ? trim($_POST['street_address']) : '';
    $post_code = isset($_POST['post_code']) ? trim($_POST['post_code']) : '';

    // Validate input
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "A valid email is required.";
        exit;
    }
    if (empty($password)) {
        echo "Password is required.";
        exit;
    }
    if (empty($first_name)) {
        echo "First name is required.";
        exit;
    }
    if (empty($last_name)) {
        echo "Last name is required.";
        exit;
    }
    if (empty($street_address)) {
        echo "Street address is required.";
        exit;
    }
    if (empty($post_code)) {
        echo "Postcode is required.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    try {
        $stmt = $db->prepare("INSERT INTO login_details (first_name, last_name, street_address, post_code, email_address, password) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->execute([$first_name, $last_name, $street_address, $post_code, $email, $hashedPassword]);

        if ($stmt->rowCount() > 0) {
            echo "User registered successfully! <a href='login.php'>Click here to login</a>";
        } else {
            echo "User registration failed.";
        }
    } catch (Exception $e) {
        // Handle errors
        echo 'Registration failed: ' . $e->getMessage();
    }
} else {
    // The form was not submitted correctly.
    echo "Error: Form not submitted.";
}
?>
