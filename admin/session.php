<?php
session_start();

require_once "../config/config.php";

// Retrieve the provided email and password from the form
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute a SQL query to retrieve admin credentials
$stmt = $conn->prepare("SELECT * FROM admin WHERE name = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Check if a matching row is found in the database
if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();
    $storedPassword = $row['password'];
    
    // Verify the provided password against the stored password
    if (password_verify($password, $storedPassword)) {
        // Create a session for the admin
        $_SESSION['admin'] = true;
        echo "Admin session created successfully.";
        // Redirect to the admin dashboard or any other desired page
        header("Location: dash.php");
        exit;
    }
}

echo "Invalid credentials. Please try again.";

$stmt->close();
$conn->close();
?>
