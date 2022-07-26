<?php 
include 'config.php';
if(!isset($_SESSION['id'])) {
    header('location: login.php');

}
$query = mysqli_query($link,"SELECT * FROM accounts_tbl WHERE id = ".$_SESSION['id']);
$user  = mysqli_fetch_object($query);

?>

<!doctype html>
<html lang="en">

<head>
<title>168 Deparo | Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="icon" href="../admin/brgy.png" type="image/x-icon">

<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css"/>
<link rel="stylesheet" href="../assets/vendor/jquery-steps/jquery.steps.css">
<link rel="stylesheet" href="../assets/vendor/nestable/jquery-nestable.css"/>
<link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="../admin/assets/css/main.css">
<link rel="stylesheet" href="../admin/assets/css/inbox.css">
<link rel="stylesheet" href="../admin/assets/css/color_skins.css">

<style type="text/css">
    .layout-fullwidth #wrapper #main-content {
    width: 100%;
    }

    .logo {
    line-height: 60px;
    color: #FD7E14;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    }

    .wizard > .steps .current a, .wizard > .steps .current a:hover, .wizard > .steps .current a:active {
    background: #FD7E14;
    color: #fff;
    cursor: default;
    }

    .center {
        text-align: center;
        cursor: default;
    }

    .underline {
        text-decoration: underline;
        font-size: 16px;
        padding-bottom: 15px;
        padding-top: 10px;
        text-align: center;
    }

    .asterisk {
        color: red;
    }

    .wizard > .steps .current a, .wizard > .steps .current a:hover, .wizard > .steps .current a:active {
        background: #FD7E14;
        color: ffffff;
    }

    .wizard > .steps .done a, .wizard > .steps .done a:hover, .wizard > .steps .done a:active {
        background: #fd7e1482;
    }

    .wizard > .actions a, .wizard > .actions a:hover, .wizard > .actions a:active {
        background: #FD7E14;
    }


</style>
</head>
<body class="theme-gray layout-fullwidth">

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<div id="wrapper">

    <?php include 'topbar.php';?>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        
                    </ul>
                </div>
            </div>
        </div>     
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-12">
                    <div class="card">
                        <div class="header bline">
                            <h2>Dashboard</h2>
                        </div>
                        <div class="body theme-orange">
                            <nav id="left-sidebar-nav" class="sidebar-nav" style="margin: 0;">
                                <ul id="main-menu" class="metismenu">
                                    <li class="active"><a href="home.php" class="sidebar"><i class="icon-home"></i><span>Home</span></a></li>
                                    <li>
                                        <a href="#" class="has-arrow"><i class="icon-docs"></i><span>Application Form</span></a>
                                        <ul class="collapse in">
                                            <li><a href="user_barangay_id.php">Barangay ID</a></li>
                                            <li><a href="user_barangay_clearance.php">Barangay Clearance</a></li>
                                            <li><a href="user_barangay_indigency.php">Barangay Indigency</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="user_blotter.php"><i class="fa fa-legal"></i><span>Blotter</span></a></li>
                                    <li><a href="user_request_status.php"><i class="icon-refresh"></i><span>Request Status</span></a></li>
                                    <li><a href="user_setting.php"><i class="icon-settings"></i><span>Setting</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="card"  style="height: 100vh;">
                        <div class="header">
                            <h2>Home</h2>
                        </div>
                        <div class="row clearfix justify-content-center" style="padding-top: 15%;">
                            <div class="col-lg-7 col-md-12">
                                <img class="mx-auto d-block" src="assets/images/welcome.png" style="width: 45%; height: auto;"><br>
                                <h4 style="text-align: center;">Welcome, <?=$user->firstname == NULL ? $user->email : $user->firstname?>!</h4>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>    
        </div>
    </div>


<!-- Javascript -->
<script src="../admin/assets/bundles/libscripts.bundle.js"></script>    
<script src="../admin/assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/sweetalert/sweetalert.min.js"></script><!-- SweetAlert Plugin Js --> 

<script src="../admin/assets/bundles/mainscripts.bundle.js"></script>
<script src="../admin/assets/js/pages/ui/dialogs.js"></script>

<!-- Stepper -->
<script src="../assets/vendor/jquery-validation/jquery.validate.js"></script><!-- Jquery Validation Plugin Css -->
<script src="../assets/vendor/jquery-steps/jquery.steps.js"></script><!-- JQuery Steps Plugin Js -->
<script src="../admin/assets/js/pages/forms/form-wizard.js"></script>

<!-- Side nav -->
<script src="../assets/vendor/nestable/jquery.nestable.js"></script><!-- Jquery Nestable -->
<script src="../admin/assets/js/pages/ui/sortable-nestable.js"></script> 

<!-- Upload image -->
<script src="../assets/vendor/dropify/js/dropify.min.js"></script>
<script src="../admin/assets/js/pages/forms/dropify.js"></script>

</body>
</html>