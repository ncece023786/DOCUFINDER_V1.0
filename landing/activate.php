<?php
include 'config.php';
global $link;
$trigger  = $_GET['trigger'];
$email    = urldecode(base64_decode($trigger));
$checking = mysqli_query($link,"SELECT * FROM accounts_tbl WHERE email = '$email'");
if(mysqli_num_rows($checking) > 0) {
    $message = base64_encode(urlencode('Your account has been activated'));
    mysqli_query($link,"UPDATE accounts_tbl SET status = 1 WHERE email = '$email'");
    header('location: login.php?success=true&message='.$message);
} else {
    $message = base64_encode(urlencode('There is a problem activating your account.'));
    header('location: sign_up.php?success=false&message='.$message);
}