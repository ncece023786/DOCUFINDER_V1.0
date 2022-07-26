<?php
include 'config.php';
global $link;
$query = mysqli_query($link,"SELECT * FROM forms_tbl WHERE accounts_id = ".$_SESSION['id']);
$queryBlotter = mysqli_query($link,"SELECT * FROM blotter WHERE accounts_id = ".$_SESSION['id']);
?>
<!doctype html>
<html lang="en">

<head>
    <title>168 Deparo | Clearance</title>
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
                                        <li class="active"><a href="user_request_status.php"><i
                                                    class="icon-refresh"></i><span>Request Status</span></a></li>
                                        <li><a href="user_setting.php"><i
                                                    class="icon-settings"></i><span>Setting</span></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="card"  style="height: 100%;">
                            <div class="header">
                                <h2>Request Status</h2>
                            </div>
                            <div class="body">
                                <?php if(mysqli_num_rows($query) > 0) { ?>
                                    <div class="table-responsive check-all-parent">
                                    <table class="table table-hover m-b-0 c_list">
                                        <thead>
                                            <tr>
                                                <th style="width:1px">#</th>
                                                <th>No.</th>
                                                <th>Application</th>
                                                <th class="text-center" style="width:1px">Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i=1; foreach($query as $data) { ?>
                                            <tr>
                                                <td><?=$i++?></td>
                                                <td>
                                                   <?=$data['reference']?>
                                                </td>
                                                <td>
                                                  <?=$data['category']?>
                                                </td>
                                                <td>
                                                    <?php if($data['status'] == 0) { ?>
                                                        <span class="badge badge-warning">Pending</span>
                                                    <?php } elseif($data['status'] == 1) { ?>
                                                        <span class="badge badge-primary">On Going</span>
                                                    <?php } elseif($data['status'] == 2) { ?>
                                                        <span class="badge badge-success">Completed</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-danger">Declined</span>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    
                                                    <?php if($data['category'] == 'Barangay ID') { ?>
                                                        <button type="button" onclick="reviewBarangayId('<?=$data['id']?>')" class="btn btn-warning" title="Edit"><i class="icon-eye"></i></button>
                                                    <?php } elseif($data['category'] == 'Barangay Clearance') { ?>
                                                        <button type="button" onclick="reviewBarangayClearance('<?=$data['id']?>')" class="btn btn-warning" title="Edit"><i class="icon-eye"></i></button>
                                                    <?php } elseif($data['category'] == 'Barangay Indigency') { ?>
                                                        <button type="button" onclick="reviewBarangayIndigency('<?=$data['id']?>')" class="btn btn-warning" title="Edit"><i class="icon-eye"></i></button>
                                                    <?php } else { ?>
                                                    <?php }?>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>

                                            
                                            <?php } ?>

                                            <?php foreach($queryBlotter as $blotter) { ?>
                                                <tr>
                                                <td><?=$i++?></td>
                                                <td>
                                                   <?=$blotter['blotter_num']?>
                                                </td>
                                                <td>
                                                  Blotter 
                                                </td>
                                                <td>
                                                    <?php if($blotter['confirm_status'] == 0) { ?>
                                                        <span class="badge badge-warning">Pending</span>
                                                    <?php } elseif($blotter['confirm_status'] == 1) { ?>
                                                        <span class="badge badge-primary">On Going</span>
                                                    <?php } elseif($blotter['confirm_status'] == 2) { ?>
                                                        <span class="badge badge-success">Completed</span>
                                                    <?php } else { ?>
                                                        <span class="badge badge-danger">Declined</span>
                                                    <?php }?>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-warning" title="Edit"><i
                                                            class="icon-eye"></i></button>
                                                    <button type="button" data-type="confirm"
                                                        class="btn btn-danger js-sweetalert" title="Delete"><i
                                                            class="fa fa-trash-o"></i></button>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <?php } else { ?>
                                    <fieldset>
                                    <div class="row clearfix justify-content-center" style="padding-top: 15%;">
                                        <div class="col-lg-7 col-md-12">
                                            <img class="mx-auto d-block" src="assets/images/free.png" style="width: 50%; height: auto;"><br>
                                            <h2 style="text-align: center;">You don't have any pending request.</h2>
                                        </div>
                                    </div>
                                </fieldset>
                                <?php } ?>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<div class="modal fade" id="modal_barangay_id" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="reviewTitle" id="largeModalLabel" style="font-weight: bold;">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>
            </div>
            <!-- Form Start -->

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <div class="form-group row justify-content-center">
                                    <img src="" id="barangay_profile" style="width:96px;height:96px" class="img-responsive">
                                </div>
                            </div>

                            <div class="col-md-10 col-12">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Name</label>
                                            <label id="barangay_name" class="form-control"></label>
                                        </div>
                                    </div>

                               
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Date of Birth</label>
                                            <label id="barangay_dob" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Civil Status</label>
                                            <label id="barangay_civil_status" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Expiration Date</label>
                                            <label id="barangay_expiration-date" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Mode of Payment</label>
                                            <label id="barangay_mop" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Address</label>
                                            <label id="barangay_address" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="barangay_complainant_review" class="control-label">Emergency Contact</label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Name</label>
                                            <label id="barangay_e_name" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Relationship</label>
                                            <label id="barangay_e_relationship" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Contact</label>
                                            <label id="barangay_e_contact" class="form-control"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer Getblotter_numModal">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
            <!-- Form End -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_barangay_clearance" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="reviewTitle" id="largeModalLabel" style="font-weight: bold;">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>
            </div>
            <!-- Form Start -->

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-2 col-12">
                                <div class="form-group row justify-content-center">
                                    <img src="" id="clearance_profile" style="width:96px;height:96px" class="img-responsive">
                                </div>
                            </div>

                            <div class="col-md-10 col-12">
                                <div class="row">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Name</label>
                                            <label id="clearance_name" class="form-control"></label>
                                        </div>
                                    </div>

                               
                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Date of Birth</label>
                                            <label id="clearance_dob" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Place of Birth</label>
                                            <label id="clearance_pob" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Purpose</label>
                                            <label id="clearance_purpose" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Remarks</label>
                                            <label id="clearance_remarks" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Address</label>
                                            <label id="clearance_address" class="form-control"></label>
                                        </div>
                                    </div>

                                 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer Getblotter_numModal">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
            <!-- Form End -->
        </div>
    </div>
</div>

<div class="modal fade" id="modal_barangay_indigency" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="reviewTitle" id="largeModalLabel" style="font-weight: bold;">Edit</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>
            </div>
            <!-- Form Start -->

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Name</label>
                                            <label id="indigency_name" class="form-control"></label>
                                        </div>
                                    </div>

                               
                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="complainant_review" class="control-label">Address</label>
                                            <label id="indigency_address" class="form-control"></label>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-12">
                                        <div class="form-group">
                                            <label for="purpose" class="control-label">Purpose</label>
                                            <label id="indigency_purpose" class="form-control"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer Getblotter_numModal">
                <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            </div>
            <!-- Form End -->
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
        <script src="../assets/vendor/jquery-validation/jquery.validate.js"></script>
        <!-- Jquery Validation Plugin Css -->
        <script src="../assets/vendor/jquery-steps/jquery.steps.js"></script><!-- JQuery Steps Plugin Js -->
        <script src="../admin/assets/js/pages/forms/form-wizard.js"></script>

        <!-- Side nav -->
        <script src="../assets/vendor/nestable/jquery.nestable.js"></script><!-- Jquery Nestable -->
        <script src="../admin/assets/js/pages/ui/sortable-nestable.js"></script>

        <!-- Upload image -->
        <script src="../assets/vendor/dropify/js/dropify.min.js"></script>
        <script src="../admin/assets/js/pages/forms/dropify.js"></script>

        <script>

            function reviewBarangayId(id) {
                if (id) {
                    $.ajax({
                        url: '../admin/get_forms.php',
                        type: 'POST',
                        data: {
                            id: id
                        },
                        dataType: 'json', //TYPE OF DATA DISPLAYED FROM BACKGROUND TO SERVER
                        success: function(response) {
                            //datetime-local format should be like this m/d/yTh:i:s
                            $("#barangay_profile").attr("src", './assets/uploads/' + response.profile);
                            $('.reviewTitle').html('Reference: '+response.reference)
                            $('#barangay_name').html(response.name);
                            $('#barangay_address').html(response.address);
                            $('#barangay_dob').html(response.dob);
                            $('#barangay_mop').html(response.mop);
                            $('#barangay_civil_status').html(response.civil_status);
                            $('#barangay_expiration-date').html(response.name);
                            $('#barangay_e_name').html(response.e_name);
                            $('#barangay_e_relationship').html(response.e_relationship);
                            $('#barangay_e_contact').html(response.e_contact);
                            $('#modal_barangay_id').modal()
                        } //END OF SUCCESS FUNCTION
                    }); // END OF AJAX

                } else {
                alert("Nothing happen");
                }
            }

            function reviewBarangayClearance(id) {
                if (id) {

                $.ajax({
                    url: '../admin/get_forms.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    dataType: 'json', //TYPE OF DATA DISPLAYED FROM BACKGROUND TO SERVER
                    success: function(response) {
                        //datetime-local format should be like this m/d/yTh:i:s
                        $("#clearance_profile").attr("src", './assets/uploads/' + response.profile);
                        $('.reviewTitle').html('Reference: '+response.reference)
                        $('#clearance_name').html(response.name);
                        $('#clearance_address').html(response.address);
                        $('#clearance_dob').html(response.dob);
                        $('#clearance_pob').html(response.pob);
                        $('#clearance_purpose').html(response.purpose);
                        $('#clearance_remarks').html(response.remarks);
                        $('#modal_barangay_clearance').modal()
                    } //END OF SUCCESS FUNCTION
                }); // END OF AJAX

                } else {
                alert("Nothing happen");
                }

            }

            function reviewBarangayIndigency(id) {
                if (id) {
                $.ajax({
                    url: '../admin/get_forms.php',
                    type: 'POST',
                    data: {
                        id: id
                    },
                    dataType: 'json', //TYPE OF DATA DISPLAYED FROM BACKGROUND TO SERVER
                    success: function(response) {
                        //datetime-local format should be like this m/d/yTh:i:s
                        $('.reviewTitle').html('Reference: '+response.reference)
                        $('#indigency_name').html(response.name);
                        $('#indigency_address').html(response.address);
                        $('#indigency_purpose').html(response.purpose);
                        $('#modal_barangay_indigency').modal()
                    } //END OF SUCCESS FUNCTION
                }); // END OF AJAX

                } else {
                alert("Nothing happen");
                }

            }

        </script>

</body>

</html>