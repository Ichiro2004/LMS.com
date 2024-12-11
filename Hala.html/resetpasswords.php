<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }
    
    // Generate a unique token
    $token = bin2hex(random_bytes(50));
    
    // Store token in localStorage (Simulating database)
    echo "<script>
        localStorage.setItem('reset_token', '$token');
        localStorage.setItem('reset_email', '$email');
    </script>";
    
    // Send reset password email (Simulating email send)
    $resetLink = "newpassword.html?token=$token";
    echo "Click the link to reset your password: <a href='$resetLink'>$resetLink</a>";
}
?>