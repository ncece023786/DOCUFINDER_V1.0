<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Stepper</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
  <link rel="stylesheet" href="assets/css/stepper_form.css">
  <link rel="stylesheet" href="assets/css/user_dashboard.css">

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
<!-- partial:index.partial.html -->
<div class="container">
  <div class="panel panel-default">
    <div class="panel-body">
      <div class="stepper">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active">
            <a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Step 1">
              <span class="round-tab">1</span>
            </a>
          </li>
          <li role="presentation" class="disabled">
            <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Step 2">
              <span class="round-tab">2</span>
            </a>
          </li>
          <li role="presentation" class="disabled">
            <a class="persistant-disabled" href="#stepper-step-3" data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Step 3">
              <span class="round-tab">3</span>
            </a>
          </li>
          <li role="presentation" class="disabled">
            <a class="persistant-disabled" href="#stepper-step-4" data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Complete">
              <span class="round-tab">4</span>
            </a>
          </li>
        </ul>
        <form role="form">
          <div class="tab-content">
            <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-1">
              <h3>1. Fill up form</h3>
                <div class="col-lg-12 offset-lg-1" style="padding-top: 50px;">
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
                                  <form>
                                    <div class="form-group">
                                      <label for="name">Name <span>*</span></label>
                                      <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Fullname" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="address">Address <span>*</span></label>
                                      <input type="address" class="form-control" id="address" aria-describedby="address" placeholder="Complete address" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="dob">Date of Birth <span>*</span></label>
                                      <input class="form-control" type="date" id="datepicker" name="dob" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="status">Civil Status <span>*</span></label>
                                      <select class="form-control" name="status" required>
                                        <option selected="selected" value="none">Choose status</option>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="widowed">Widowed</option>
                                      </select>
                                    </div>
                                    <h5 class="underline">Incase of Emergency</h5>
                                    <div class="form-group">
                                      <label for="name2">Name <span>*</span></label>
                                      <input type="name2" class="form-control" id="name2" aria-describedby="name2" placeholder="Fullname" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="relationship">Relationship <span>*</span></label>
                                      <select class="form-control" name="relationship" required>
                                        <option selected="selected" value="none">Choose relationship</option>
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
                                      <label for="contact">Contact No. <span>*</span></label>
                                      <input type="contact" class="form-control" id="contact" aria-describedby="contact" placeholder="Phone number" required>
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
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                                </div>
                                <div class="indigency box">
                                  <form>
                                    <div class="form-group">
                                      <label for="name">Name <span>*</span></label>
                                      <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Fullname" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="address">Address <span>*</span></label>
                                      <input type="address" class="form-control" id="address" aria-describedby="address" placeholder="Complete address" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="dob">Date of Birth <span>*</span></label>
                                      <input class="form-control" type="date" id="datepicker" name="dob" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="purpose">Purpose <span>*</span></label>
                                      <input type="purpose" class="form-control" id="purpose" aria-describedby="purpose" placeholder="" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                                </div>
                                <div class="clearance box">
                                  <form>
                                    <div class="form-group">
                                      <label for="name">Name <span>*</span></label>
                                      <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Fullname" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="address">Address <span>*</span></label>
                                      <input type="address" class="form-control" id="address" aria-describedby="address" placeholder="Complete address" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="dob">Date of Birth <span>*</span></label>
                                      <input class="form-control" type="date" id="datepicker" name="dob" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="dob">Place of Birth <span>*</span></label>
                                      <input class="form-control" type="date" id="datepicker" name="dob" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="purpose">Purpose <span>*</span></label>
                                      <input type="purpose" class="form-control" id="purpose" aria-describedby="purpose" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="purpose">Remarks <span>*</span></label>
                                      <input type="purpose" class="form-control" id="purpose" aria-describedby="purpose" placeholder="" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                                </div>
                                <div class="blotter box">
                                  <form>
                                    <div class="form-group">
                                      <label for="name">Complainant <span>*</span></label>
                                      <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Fullname" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="address">Complainant's Address <span>*</span></label>
                                      <input type="address" class="form-control" id="address" aria-describedby="address" placeholder="Complete address" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="name">Dependant <span>*</span></label>
                                      <input type="name" class="form-control" id="name" aria-describedby="name" placeholder="Fullname" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="address">Dependant's Address <span>*</span></label>
                                      <input type="address" class="form-control" id="address" aria-describedby="address" placeholder="Complete address" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="dob">Date and Time <span>*</span></label>
                                      <input class="form-control" type="datetime-local" id="date_and_time1" name="date_and_time1" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="purpose">Narrated By <span>*</span></label>
                                      <input type="purpose" class="form-control" id="purpose" aria-describedby="purpose" placeholder="" required>
                                    </div>
                                    <div class="form-group">
                                      <label for="purpose">Narrative <span>*</span></label>
                                      <textarea id="ckeditor" name="narrative" required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                                </div>
                          </div>
              <ul class="list-inline pull-right">
                <li>
                  <a class="btn btn-primary next-step">Next</a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
              <h3>2. Enter Payment Information and upload proof of payment</h3>
              <p>This is step 2</p>
              <ul class="list-inline pull-right">
                <li>
                  <a class="btn btn-default prev-step">Back</a>
                </li>
                <li>
                  <a class="btn btn-primary next-step">Next</a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="stepper-step-3">
              <h3 class="hs">3. Review and Submit Payment</h3>
              <p>This is step 3</p>
              <ul class="list-inline pull-right">
                <li>
                  <a class="btn btn-default prev-step">Back</a>
                </li>
                <li>
                  <a class="btn btn-default cancel-stepper">Cancel Payment</a>
                </li>
                <li>
                  <a class="btn btn-primary next-step">Submit Payment</a>
                </li>
              </ul>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
              <h3>4. All done!</h3>
              <p>You have successfully completed all steps.</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>
  <script  src="assets/js/stepper_form.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
    $(document).ready(function(){
        $('#select1').change(function(){
            $(this).find("option:selected").each(function(){
                var optionValue = $(this).attr("value");
                if(optionValue){
                    $(".box").not("." + optionValue).hide();
                    $("." + optionValue).show();
                } else{
                    $(".box").hide();
                }
            });
        }).change();
    });
    </script>




</body>
</html>
