<?php
if (isset($_POST['submitted'])) {
    // Connect to the database
    require_once('db.php');
    
    // Set the PDO error mode to exception for better error handling
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Sanitize input
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Validate input
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "A valid email is required.";
        exit;
    }
    if (empty($password)) {
        echo "Password is required.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL statement
    try {
        // Prepare the SQL query
        $stmt = $db->prepare("INSERT INTO login_details (email, password) VALUES (?, ?)");

        $stmt->execute([$email, $hashedPassword]);

        // Check if the insert was successful
        if ($stmt->rowCount() > 0) {
            echo "User registered successfully! <a href='../New Frontend/login.html'>Click here to login</a>";
        } else {
            echo "User registration failed.";
        }
    } catch (PDOException $e) {
        // Handle PDO exception errors (including database connection issues)
        echo 'Registration failed: ' . $e->getMessage();
    }
} else {
    // The form was not submitted correctly.
    echo "Error: Form not submitted.";
}
?>
