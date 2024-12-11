<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST["token"];
    $newPassword = password_hash($_POST["password"], PASSWORD_DEFAULT);
    
    // Simulate loading data from local storage
    echo "
    <script>
        var resetToken = localStorage.getItem('reset_token');
        var resetEmail = localStorage.getItem('reset_email');
        
        if (resetToken === '$token') {
            // Simulate saving new password in local storage
            localStorage.setItem('password_' + resetEmail, '$newPassword');
            localStorage.removeItem('reset_token');
            localStorage.removeItem('reset_email');
            alert('Password updated successfully. Please sign in with your new password.');
            window.location.href = 'signin.html';
        } else {
            alert('Invalid or expired token.');
            window.location.href = 'forgotpassword.html';
        }
    </script>";
}
?>