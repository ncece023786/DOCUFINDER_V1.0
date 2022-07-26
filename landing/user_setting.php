<?php 
include 'config.php';
if(!isset($_SESSION['id'])) {
    header('location: login.php');

}
$query = mysqli_query($link,"SELECT * FROM accounts_tbl WHERE id = ".$_SESSION['id']);
$user  = mysqli_fetch_object($query);
if(isset($_POST['btnSaveChanges'])) {
    $surname    = $_POST['surname'];
    $firstname  = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $query = mysqli_query($link,"UPDATE accounts_tbl SET surname = '$surname', firstname = '$firstname', middlename = '$middlename' WHERE id = ".$_SESSION['id']);
    if($query) {
        header('location: user_setting.php');
    }
}

if(isset($_POST['btnChangePassword'])) {
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];

    if($new_password != $confirm_new_password || $confirm_new_password != $new_password) {
        $message = base64_encode(urlencode('Password mismatched.'));
        header('location: user_setting.php?success=false&message='.$message);
    } else {
        $password = password_hash($new_password,PASSWORD_DEFAULT);
        $query = mysqli_query($link,"UPDATE accounts_tbl SET password = '$password' WHERE id = ".$_SESSION['id']);
        if($query) {
            $message = base64_encode(urlencode('New password has been set.'));
            header('location: user_setting.php?success=true&message='.$message);
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>168 Deparo | Setting</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link rel="icon" href="../admin/brgy.png" type="image/x-icon">

    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/sweetalert/sweetalert.css" />
    <link rel="stylesheet" href="../assets/vendor/jquery-steps/jquery.steps.css">
    <link rel="stylesheet" href="../assets/vendor/nestable/jquery-nestable.css" />
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

        .wizard>.steps .current a,
        .wizard>.steps .current a:hover,
        .wizard>.steps .current a:active {
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

        .wizard>.steps .current a,
        .wizard>.steps .current a:hover,
        .wizard>.steps .current a:active {
            background: #FD7E14;
            color: ffffff;
        }

        .wizard>.steps .done a,
        .wizard>.steps .done a:hover,
        .wizard>.steps .done a:active {
            background: #fd7e1482;
        }

        .wizard>.actions a,
        .wizard>.actions a:hover,
        .wizard>.actions a:active {
            background: #FD7E14;
        }
    </style>
</head>

<body class="theme-gray layout-fullwidth">

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <div id="wrapper">

        <nav class="navbar navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-left">
                    <div class="navbar-btn">
                        <a href="dashboard.php"><img src="../assets/images/icon-light.svg" alt="HexaBit Logo"
                                class="img-fluid logo"></a>
                        <button type="button" class="btn-toggle-offcanvas"><i
                                class="lnr lnr-menu fa fa-bars"></i></button>
                    </div>
                    <span class="logo">DEPARO</span>
                </div>

                <div class="navbar-right">
                    <form id="navbar-search" class="navbar-form search-form">
                        <input value="" class="form-control" placeholder="Search here..." type="text">
                        <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    </form>
                    <div id="navbar-menu">
                        <ul class="nav navbar-nav">
                            <li class="dropdown dropdown-animated scale-left">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="icon-bell"></i>
                                    <span class="notification-dot"></span>
                                </a>
                                <ul class="dropdown-menu right_chat email">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">James Wert <small class="float-right">Just
                                                            now</small></span>
                                                    <span class="message">Lorem ipsum Veniam aliquip culpa laboris minim
                                                        tempor</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Folisise Chosielie <small
                                                            class="float-right">12min ago</small></span>
                                                    <span class="message">There are many variations of Lorem Ipsum
                                                        available, but the majority</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Ava Alexander <small class="float-right">38min
                                                            ago</small></span>
                                                    <span class="message">Many desktop publishing packages and web page
                                                        editors</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media mb-0">
                                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Debra Stewart <small class="float-right">2hr
                                                            ago</small></span>
                                                    <span class="message">Contrary to popular belief, Lorem Ipsum is not
                                                        simply random text</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-animated scale-left">
                                <a href="javascript:void(0);" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                    <i class="icon-user"></i>
                                </a>
                                <ul class="dropdown-menu feeds_widget">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="feeds-body">
                                                <h4 class="title">Profile</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="feeds-body">
                                                <h4 class="title">Logout</h4>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

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
            <?php if(isset($_GET['message'])) { ?>
                  <div class="alert alert-info"><?=urldecode(base64_decode($_GET['message']))?></div>
                <?php } ?>
                <div class="row clearfix">
                    
                    <div class="col-lg-3 col-md-12">
                        <div class="card">
                            <div class="header bline">
                                <h2>Dashboard</h2>
                            </div>
                            <div class="body theme-orange">
                                <nav id="left-sidebar-nav" class="sidebar-nav" style="margin: 0;">
                                    <ul id="main-menu" class="metismenu">
                                        <li><a href="home.php" class="sidebar"><i
                                                    class="icon-home"></i><span>Home</span></a></li>
                                        <li>
                                            <a href="#" class="has-arrow"><i class="icon-docs"></i><span>Application
                                                    Form</span></a>
                                            <ul class="collapse in">
                                                <li><a href="user_barangay_id.php">Barangay ID</a></li>
                                                <li><a href="user_barangay_clearance.php">Barangay Clearance</a></li>
                                                <li><a href="user_barangay_indigency.php">Barangay Indigency</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="user_blotter.php"><i
                                                    class="fa fa-legal"></i><span>Blotter</span></a></li>
                                        <li><a href="user_request_status.php"><i class="icon-refresh"></i><span>Request
                                                    Status</span></a></li>
                                        <li class="active"><a href="user_setting.php"><i
                                                    class="icon-settings"></i><span>Setting</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>Setting</h2>
                            </div>

                            
                            <form method="POST">
                                <div class="col-md-12">
                                    <div class="row clearfix justify-content-center">
                                        <div class="col-lg-4 col-md-12">
                                            <div class="body text-center">
                                                <div class="profile-image mb-3"><img src="../assets/images/avatar.png"
                                                        class="rounded-circle" style="width: 45%;"></div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name">Surname </label>
                                                <input type="name" class="form-control" id="name" name="surname"
                                                    value="<?=$user->surname?>" placeholder="Surname">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">First Name </label>
                                                <input type="name" class="form-control" id="name" name="firstname"
                                                    value="<?=$user->firstname?>" placeholder="First Name">
                                            </div>

                                            <div class="form-group">
                                                <label for="name">Middle Name </label>
                                                <input type="name" class="form-control" id="name" name="middlename"
                                                    value="<?=$user->middlename?>" placeholder="Middle Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="address">Email </label><br>
                                                <p><?=$user->email?></p>
                                            </div>
                                            <div class="form-group ">
                                                <a data-toggle="modal" data-target="#exampleModal"
                                                    class="btn btn-info text-white">Change Password</a>

                                                <button type="submit" name="btnSaveChanges"
                                                    class="btn btn-primary float-right">Save Changes</button>
                                                <br>
                                                <br>
                                            </div>
                                        </div>

                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method="POST">
    <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" class="form-control" name="new_password" required>
                    </div>

                    <div class="form-group">
                        <label for="">Confirm New Password</label>
                        <input type="password" class="form-control" name="confirm_new_password" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="btnChangePassword" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    </form>

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