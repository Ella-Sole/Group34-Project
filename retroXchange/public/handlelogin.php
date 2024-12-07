<?php 
session_start();


$db_host = 'localhost';
$db_name = 'retro_xchange';
$username = 'root';
$password = '';  

try {
    // Connect to the database
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get email and password from the form
        $email = trim($_POST['email']);
        $password = $_POST['password'];  // User-entered password

        // Check if email and password are not empty
        if (empty($email) || empty($password)) {
            echo "Email and Password are required.";
            exit;
        }

        // Query to fetch user details from the login_details table
        $stmt = $db->prepare("SELECT * FROM login_details WHERE email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        // Check if the user exists
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the password using password_verify()
            if (password_verify($password, $user['password'])) {
                // Successful login: set session variables
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                // Regenerate session ID for security
                session_regenerate_id(true);

                // Redirect to home page
                header("{{url('/')}}");
            exit();
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "User not found.";
        }
    }
} catch (PDOException $e) {
    // Handle database connection errors
    echo "Error: " . $e->getMessage();
    exit;
}
?>
