<?php
include 'config.php';
include_once '../admin/plugins/phpmailer/PHPMailerAutoload.php';
if(isset($_POST['button_register'])) {
  global $link;
  $email = $link->real_escape_string($_POST['email']);
  $query = mysqli_query($link,"SELECT * FROM accounts_tbl WHERE email = '$email'");
  if(mysqli_num_rows($query) > 0) {
      $message = base64_encode(urlencode("Email already exist."));
      header('location: sign_up.php?success=false&message='.$message);
  } else {
    $password = password_hash('123456789',PASSWORD_DEFAULT);
    $trigger = base64_encode(urlencode($email));
    $message = '
    <img src="http://localhost/prototype/landing/assets/images/brgy.png"> 
      Please click <a href="http://localhost/prototype/landing/activate.php?trigger='.$trigger.'">here</a> to activate your account. <br>
      Please note that your password is <b>123456789</b> by default.<br><br>
      Thank you.
    ';
    $subject = 'Activate your account';
    $email   = $_POST['email'];
    $mailer = new PHPMailer();
    $mailer->IsSMTP();
    $mailer->Host = 'smtp.gmail.com:465'; 
    $mailer->SMTPAuth = TRUE;
    $mailer->Port = 465;
    $mailer->mailer="smtp";
    $mailer->SMTPSecure = 'ssl'; 
    $mailer->IsHTML(true);
    $mailer->SMTPOptions = array('ssl' => array(
                            'verify_peer' => false, 
                            'verify_peer_name' => false, 
                            'allow_self_signed' => true)
                            );
    $mailer->Username = 'nclyrics14@gmail.com';
    $mailer->Password = 'VCbhoxznhick200';
    $mailer->From = 'admin@noreply.com'; 
    $mailer->FromName = 'admin@noreply.com';
    $mailer->Body = $message;
    $mailer->Subject = $subject;
    $mailer->AddAddress($email);
    if(!$mailer->send()) {
        $message = base64_encode(urlencode("Registration has not been successful."));
        header('location: sign_up.php?success=false&message='.$message);
      } else {
        $message = base64_encode(urlencode("Registration has been successful, Please go to your email to activate your account."));
        $result = mysqli_query($link,"INSERT INTO accounts_tbl (email,password,user_type,status) VALUES ('$email','$password',1,0)");
        header('location: sign_up.php?success=true&message='.$message);
    }
  }
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Barangay 168 Deparo | Sign Up</title>
    <link rel="icon" href="assets/images/brgy.png" type="image/x-icon">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <style type="text/css">
    .gradient-custom-2 {
    /* fallback for old browsers */
    background: #fccb90;

    /* Chrome 10-25, Safari 5.1-6 */
    background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    background: linear-gradient(to right, #ee7724, #d8363a);
    }

    @media (min-width: 768px) {
      .gradient-form {
        height: 100vh !important;
      }
    }
    @media (min-width: 769px) {
      .gradient-custom-2 {
        border-top-right-radius: .3rem;
        border-bottom-right-radius: .3rem;
      }
    }
    </style>

</head>
<body>
  <section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">
              
                <?php if(isset($_GET['message'])) { ?>
                  <div class="alert alert-info"><?=urldecode(base64_decode($_GET['message']))?></div>
                <?php } ?>

                <div class="text-center">
                  <img src="assets/images/brgy.png" style="width: 185px;" alt="logo">
                </div>

                <form method="POST">
                  <h5 style="text-align: center;">Create account</h5>
                  <p class="text-muted">Enter your email address and we'll send you a private sign up link.</p>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Email Address</label>
                    <input type="email" id="form2Example11" name="email" class="form-control"/>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-danger btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="button_register" style="height: 50px; border: none;">Send Link</button>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <a class="text-muted" href="login.php">Return to Log in</a>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <img src="assets/images/login.png" style="width: 100%; height: 100%;" alt="login">
                <h4 class="mb-4" style="padding-top: 10px;">Our Service</h4>
                <p class="small mb-0">Ang layunin nito ay mag silbing pahina na makukuhanan ng balita't Impormasyon, at mga pangyayaring nagaganap sa ating Barangay.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>