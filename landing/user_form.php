<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Barangay 168 Deparo | Application Forms</title>
    <link rel="icon" href="assets/images/brgy.png" type="image/x-icon">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/pop_up_img.css">

    <link rel="stylesheet" href="assets/css/user_dashboard.css">

    <link rel="stylesheet" href="assets/css/stepper_form.css">

    <!--SWEET ALERT 2-->
		<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'>
    <link rel="stylesheet" href="assets/css/member.css">
    <style type="text/css">
    	.card {
    		height: 150vh;
    	}
    	.slct {
    		height: 70px;
    		cursor: pointer;
    	}
    	span {
    		color: red;
    	}
    	.empty_img {
    		width: 50%;
    		height: auto;
    		display: block;
    		margin-top: 80px;
			  margin-left: auto;
			  margin-right: auto;
			  width: 50%;
			  opacity: 90%;
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
    	#preview {
			  margin-top: 1rem;
			}
			.upload {
				margin-left: auto;
				margin-right: auto;
			}
    </style>

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <a class="navbar-brand logo" href="#" style="color: #FD7E14;">DEPARO</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto">
	      <li class="nav-item active"></li>
	      <li class="nav-item"></li>
	      <li class="nav-item dropdown"></li>
	      <li class="nav-item"></li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      	<div class="dropdown" >
				  	<img src="https://i.postimg.cc/xTPrHzKR/unknown.png" class="img dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"/>
					  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
					    <button class="dropdown-item" type="button">Profile</button>
					    <button class="dropdown-item" type="button">Log Out</button>
					  </div>
					</div>
	    </form>
	  </div>
	</nav>


	<div class="content-wrapper">
      <div class="col-lg-12">
          <div class="col-lg-12 offset-lg-2" style="padding-top: 30px;">
	            <div class="col-lg-8">
									<div class="col">
									    <div class="card">
									      <div class="card-body">
									      	<a href="user_dashboard.php">< Back </a>
									        <div class="col-lg-10 offset-lg-1" style="padding-top: 50px;">
										        		<div class="form-group">
										        			<h4 class="form-group">Application Form</h4>
										        			<p>Please choose selected form <span>*</span></p>
											        		<select class="form-control slct" id="select1" required>
																		<option selected="selected" value="empty">Choose Application</option>
																		<option value="id">Barangay ID Application</option>
																		<option value="indigency">Indigency Application</option>
																		<option value="clearance">Barangay Clearance Application</option>
																		<option value="blotter">Blotter Application</option>
																	</select>
																</div>
																<div class="empty box">
														    	<img src="assets/images/empty.png" class="empty_img">
														    	<p class="center">No application form select.</p>
														    </div>
																<div class="id box">
																	<form role="form" id="insert-id-form" method="POST" action="insert_id.php" enctype="multipart/form-data">
																	  <div class="form-group">
																	    <label for="name">Name <span>*</span></label>
																	    <input type="name" class="form-control" id="name" name="name" placeholder="Fullname" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="address">Address <span>*</span></label>
																	    <input type="address" class="form-control" id="address" name="address" placeholder="Complete address" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="dob">Date of Birth <span>*</span></label>
																	    <input type="date" class="form-control"  id="dob" name="dob" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="civil_status">Civil Status <span>*</span></label>
																	    <select class="form-control" name="civil_status" id="civil_status" required>
																	    	<option selected="selected" disabled="">Choose status</option>
																	    	<option value="single">Single</option>
																	    	<option value="married">Married</option>
																	    	<option value="divorced">Divorced</option>
																	    	<option value="widowed">Widowed</option>
																	    </select>
																	  </div>
																	  <h5 class="underline">Incase of Emergency</h5>
																	  <div class="form-group">
																	    <label for="e_name">Name <span>*</span></label>
																	    <input type="e_name" class="form-control" id="e_name" name="e_name" placeholder="Fullname" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="e_relationship">Relationship <span>*</span></label>
																	    <select class="form-control" name="e_relationship" id="e_relationship" required>
																	    	<option selected="selected" disabled="">Choose relationship</option>
																	    	<option value="mother">Mother</option>
																	    	<option value="father">Father</option>
																	    	<option value="sister">Sister</option>
																	    	<option value="brother">Brother</option>
																	    	<option value="auntie">Auntie</option>
																	    	<option value="uncle">Uncle</option>
																	    	<option value="g-mother">Grand Mother</option>
																	    	<option value="g-father">Grand Father</option>
																	    </select>
																	  </div>
																	  <div class="form-group">
																	    <label for="e_contact">Contact No. <span>*</span></label>
																	    <input type="e_contact" class="form-control" id="e_contact" name="e_contact" aria-describedby="e_contact" placeholder="Phone number" required>
																	  </div>
																	  <div class="form-group">
																	  		<label for="attachment">Attatchment <span>*</span></label>
																	  		<!-- Your preview will be put here -->
																				<div>
																				  <img src="no-image.jpg" id="preview" width=300 height=300 />
																				</div>
																	  		<script>
																				  UPLOADCARE_PUBLIC_KEY = "afc8ba8b622ed74ac42f";
																				</script>
																				<script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js" charset="utf-8"></script>
																				<!-- The input element below will turn into the widget -->
																				<input type="hidden" role="uploadcare-uploader" data-crop="1:1" data-images-only >
																	  </div>
																	  <button type="submit" class="btn btn-primary float-right" name="insert" id="insert">Submit</button>
																	</form>
																</div>
														    <div class="indigency box">
														    	<form role="form" id="insert-indigency-form" method="POST" action="insert_indigency.php" enctype="multipart/form-data">
														    		<div class="form-group">
																	    <label for="name">Name <span>*</span></label>
																	    <input type="name" class="form-control" id="name" name="name" placeholder="Fullname" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="address">Address <span>*</span></label>
																	    <input type="address" class="form-control" id="address" name="address" placeholder="Complete address" required>
																		</div>
																		<div class="form-group">
																	    <label for="dob">Date of Birth <span>*</span></label>
																	    <input class="form-control" type="date" id="datepicker" name="dob" required>
																	  </div>
																		<div class="form-group">
																	    <label for="purpose">Purpose <span>*</span></label>
																	    <input type="purpose" class="form-control" id="purpose" name="purpose" placeholder="" required>
																		</div>
																		<button type="submit" class="btn btn-primary float-right" name="insert" id="insert">Submit</button>
																	</form>
														    </div>
														    <div class="clearance box">
														    	<form role="form" id="insert-clearance-form" method="POST" action="insert_clearance.php" enctype="multipart/form-data">
														    		<div class="form-group">
																	    <label for="name">Name <span>*</span></label>
																	    <input type="name" class="form-control" id="name" name="name" placeholder="Fullname" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="address">Address <span>*</span></label>
																	    <input type="address" class="form-control" id="address" name="address" placeholder="Complete address" required>
																		</div>
																		<div class="form-group">
																	    <label for="dob">Date of Birth <span>*</span></label>
																	    <input class="form-control" type="date" id="datepicker" name="dob" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="pob">Place of Birth <span>*</span></label>
																	    <input type="pob" class="form-control" id="pob" name="pob" placeholder="location" required>
																	  </div>
																		<div class="form-group">
																	    <label for="purpose">Purpose <span>*</span></label>
																	    <input type="purpose" class="form-control" id="purpose" name="purpose" placeholder="" required>
																		</div>
																		<div class="form-group">
																	    <label for="remarks">Remarks <span>*</span></label>
																	    <input type="remarks" class="form-control" id="purpose" name="remarks" placeholder="" required>
																		</div>
																		<button type="submit" class="btn btn-primary float-right"  name="insert" id="insert">Submit</button>
																	</form>
														    </div>
														    <div class="blotter box">
														    	<form role="form" id="insert-blotter-form" method="POST" action="insert_blotter.php" enctype="multipart/form-data">
														    		<div class="form-group">
																	    <label for="complainant">Complainant <span>*</span></label>
																	    <input type="name" class="form-control" id="complainant" name="complainant" placeholder="Fullname" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="address1">Complainant's Address <span>*</span></label>
																	    <input type="address" class="form-control" id="address1" name="address1" placeholder="Complete address" required>
																		</div>
																		<div class="form-group">
																	    <label for="dependant">Dependant <span>*</span></label>
																	    <input type="name" class="form-control" id="dependant" name="dependant" placeholder="Fullname" required>
																	  </div>
																	  <div class="form-group">
																	    <label for="address2">Dependant's Address <span>*</span></label>
																	    <input type="address" class="form-control" id="address2" name="address2" placeholder="Complete address" required>
																		</div>
																		<div class="form-group">
																	    <label for="date_and_time1">Date and Time <span>*</span></label>
																	    <input class="form-control" type="datetime-local" id="date_and_time1" name="date_and_time1" required>
																	  </div>
																		<div class="form-group">
																	    <label for="narrated_by">Narrated By <span>*</span></label>
																	    <input type="narrated_by" class="form-control" id="narrated_by" name="narrated_by" placeholder="" required>
																		</div>
																		<div class="form-group">
																	    <label for="narrative">Narrative <span>*</span></label>
																	    <textarea id="ckeditor" name="narrative" required></textarea>
																		</div>
																		<button type="submit" class="btn btn-primary float-right"  name="insert" id="insert">Submit</button>
																	</form>
														    </div>
									        </div>
									      </div>
									    </div>
									</div>
	            </div>
          </div>
      </div>
  </div>

  	<!-- Ckeditor -->
  	<script src="../assets/vendor/ckeditor/ckeditor.js"></script>
		<script type="text/javascript">CKEDITOR.replace('ckeditor');</script>

		<script src="assets/js/uploadcare.js"></script>

		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="assets/js/select_application.js"></script>

		<!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>
    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script type="text/javascript">
  	$(document).ready(function(){

      $('#insert-id-form').unbind('insert').bind('submit', function() {

        var form = $(this); //GET FORM

        $.ajax({
          url: form.attr('action'), //GETTING THE ATTRIBUTE 'action' from <form> tag
          type: form.attr('method'), //same goes here
          data: new FormData(this), //SERIALIZING DATA INCLUDED FILE types
          dataType: 'json', //TYPE OF DATA DISPLAYED FROM BACKGROUND TO SERVER
          contentType: false,
          cache: false,
          processData: false,
          success:function(response){

            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
              },
              buttonsStyling: true
            })

            if(response.success == true) //KINUHA NATIN TO SA insert_blotter.php line 7
            {
                swalWithBootstrapButtons.fire(
                  'Good job!',
                  response.message,
                  'success'
                )
            } 
            else 
            {
              swalWithBootstrapButtons.fire(
                'Oops...',
                response.message,
                'error'
              )
            }
          }//END OF SUCCESS FUNCTION
        });// END OF AJAX

      return false;

      });//END OF UNBIND

    });//END OF DOCUMENT READY


    $(document).ready(function(){

      $('#insert-indigency-form').unbind('insert').bind('submit', function() {

        var form = $(this); //GET FORM

        $.ajax({
          url: form.attr('action'), //GETTING THE ATTRIBUTE 'action' from <form> tag
          type: form.attr('method'), //same goes here
          data: new FormData(this), //SERIALIZING DATA INCLUDED FILE types
          dataType: 'json', //TYPE OF DATA DISPLAYED FROM BACKGROUND TO SERVER
          contentType: false,
          cache: false,
          processData: false,
          success:function(response){

            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
              },
              buttonsStyling: true
            })

            if(response.success == true) //KINUHA NATIN TO SA insert_blotter.php line 7
            {
                swalWithBootstrapButtons.fire(
                  'Good job!',
                  response.message,
                  'success'
                )
            } 
            else 
            {
              swalWithBootstrapButtons.fire(
                'Oops...',
                response.message,
                'error'
              )
            }
          }//END OF SUCCESS FUNCTION
        });// END OF AJAX

      return false;

      });//END OF UNBIND

    });//END OF DOCUMENT READY


    $(document).ready(function(){

      $('#insert-clearance-form').unbind('insert').bind('submit', function() {

        var form = $(this); //GET FORM

        $.ajax({
          url: form.attr('action'), //GETTING THE ATTRIBUTE 'action' from <form> tag
          type: form.attr('method'), //same goes here
          data: new FormData(this), //SERIALIZING DATA INCLUDED FILE types
          dataType: 'json', //TYPE OF DATA DISPLAYED FROM BACKGROUND TO SERVER
          contentType: false,
          cache: false,
          processData: false,
          success:function(response){

            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
              },
              buttonsStyling: true
            })

            if(response.success == true) //KINUHA NATIN TO SA insert_blotter.php line 7
            {
                swalWithBootstrapButtons.fire(
                  'Good job!',
                  response.message,
                  'success'
                )
            } 
            else 
            {
              swalWithBootstrapButtons.fire(
                'Oops...',
                response.message,
                'error'
              )
            }
          }//END OF SUCCESS FUNCTION
        });// END OF AJAX

      return false;

      });//END OF UNBIND

    });//END OF DOCUMENT READY


    $(document).ready(function(){

      $('#insert-blotter-form').unbind('insert').bind('submit', function() {

        var form = $(this); //GET FORM

        $.ajax({
          url: form.attr('action'), //GETTING THE ATTRIBUTE 'action' from <form> tag
          type: form.attr('method'), //same goes here
          data: new FormData(this), //SERIALIZING DATA INCLUDED FILE types
          dataType: 'json', //TYPE OF DATA DISPLAYED FROM BACKGROUND TO SERVER
          contentType: false,
          cache: false,
          processData: false,
          success:function(response){

            const swalWithBootstrapButtons = Swal.mixin({
              customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
              },
              buttonsStyling: true
            })

            if(response.success == true) //KINUHA NATIN TO SA insert_blotter.php line 7
            {
                swalWithBootstrapButtons.fire(
                  'Good job!',
                  response.message,
                  'success'
                )
            } 
            else 
            {
              swalWithBootstrapButtons.fire(
                'Oops...',
                response.message,
                'error'
              )
            }
          }//END OF SUCCESS FUNCTION
        });// END OF AJAX

      return false;

      });//END OF UNBIND

    });//END OF DOCUMENT READY
  	</script>


</body>
</html>