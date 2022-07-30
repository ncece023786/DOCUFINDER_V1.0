<?php
if(isset($_POST['btnContact'])) {
  global $link;
  $query   = mysqli_query($link,"INSERT INTO message_tbl (name,email,message) VALUES ('$name','$email','$message')");
  if($query) {
      $message = base64_encode(urlencode('This website is not functional; it is for show purposes only.'));
      header('location: index.php?success=false&message='.$message);
  }
  else {
      $message = base64_encode(urlencode('This website is not functional; it is for show purposes only.'));
      header('location: index.php?success=false&message='.$message);
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Barangay 168 Deparo</title>
    <link rel="icon" href="assets/images/brgy.png" type="image/x-icon">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-lava.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/pop_up_img.css">


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css'><link rel="stylesheet" href="assets/css/member.css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <div class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-body">
        <img class="pop-img" src="assets/images/auto_pop_up.jpg" width="100%"/>
        </div>
      </div>
    </div>
  </div>


    <div class="alert alert-danger alert-server" role="alert" style="margin-bottom: 0px; text-align: center;">
      <strong>Attention!</strong> This website is not functional; it is for show purposes only.
    </div>  

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="top: 50px; position:absolute !important;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">

                        <!-- ***** Logo Start ***** -->
                        <a href="dashboard.php" class="logo">
                            DEPARO
                        </a>
                        <!-- ***** Logo End ***** -->

                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="menu-item">Home</a></li>
                            <li class="scroll-to-section"><a href="#testimonials" class="menu-item">Officials</a></li>
                            <li class="scroll-to-section"><a href="#about" class="menu-item">News/Update</a></li>
                            <li class="scroll-to-section"><a href="#contact-us" class="menu-item">Contact Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->

                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter left move 30px over 0.6s after 0.4s" style="margin-top: 310px;">
                        <img src="assets/images/brgy.png" alt="logo" class="img img-responsive" style="height: 40%; width: 40%;">
                        <h1 style="font-weight: bold; font-size: 67.78px; width: 660px; margin-bottom: 0px;">BARANGAY 168 <em>DEPARO</em></h1>
                        <h2 style="font-weight: bold;">
                            <div id="carouselExampleControls" class="carousel vert slide" data-ride="carousel" data-interval="1500">
                                <div class="carousel-inner">
                                    <div class="carousel-item">"Kayo ang Una!</div>
                                    <div class="carousel-item active">Diyos ang kasama!"</div>
                                </div>
                            </div>
                        </h2>
                        <p>Ang layunin nito ay mag silbing pahina na makukuhanan <br> ng balita't Impormasyon, at mga pangyayaring nagaganap <br> sa ating Barangay.</p> 
                        <a href="service.php" class="main-button-slider">Our Service</a>
                        <a href="login.php" class="main-button-slider2">Login</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->

    <div class="left-image-decor"></div>

     <!-- ***** Testimonials Starts ***** -->
    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>BARANGAY <em>OFFICIALS</em></h2>
                        <p>Caloocan City is centered on developing an investor-friendly environment that will create jobs for its constituents. A vibrant public and private partnership that ensures and sustains efficient, timely and responsive delivery of services, such as health, education and infrastructures that will result in an orderly community and healthy environment through an uncompromising people first policy (Tao ang Una).</p>
                    </div>
                </div>
                <!-- partial:index.partial.html -->
                <div class="blog-slider">
                    <div class="blog-slider__wrp swiper-wrapper">

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/team-05.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">CRISANTA S. DEL ROSARIO</div>
                        <span class="blog-slider__code">Punong Barangay</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/orange-avatar.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">JULIUS D. ROQUI JR</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>
                    
                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/orange-avatar.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">JOSITA E. DEL ROSARIO</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/orange-avatar.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">PAUL RYAN A. CASTILLO</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/team-06.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">GLORIA A. ARELLANO</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/orange-avatar.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">CECILLA L. MATIAS</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>
                    
                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/orange-avatar.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">JAMES Z. BAUTISTA</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/orange-avatar.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">CHRISTOPHER M. PACHECO</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/team-07.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">PRECIOUS XENA L. BOLICHE</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    <div class="blog-slider__item swiper-slide">
                      <div class="blog-slider__img">
                        <img src="assets/images/team-08.jpg" alt="">
                      </div>
                      <div class="blog-slider__content">
                        <div class="blog-slider__title">MARY ROSE T. MANANSALA</div>
                        <span class="blog-slider__code">Sangguniang Barangay Member</span>
                        <!--<div class="blog-slider__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Recusandae voluptate repellendus magni illo ea animi? </div>-->
                        <a href="#" class="blog-slider__button">READ MORE</a>
                      </div>
                    </div>

                    </div>
                        <div class="blog-slider__pagination"></div>
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Testimonials Ends ***** -->

    <div class="right-image-decor"></div>

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="center-heading">
                        <h2>NEWS/ <em>UPDATE</em></h2>
                        <p>Ang layunin nito ay mag silbing pahina na makukuhanan ng balita't Impormasyon, at mga pangyayaring nagaganap sa ating Barangay.</p>
                    </div>
                </div>

                <div class="left-image col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBrgyDeparo168&tabs=timeline&width=450&height=800&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" ></iframe>
                </div>
                <div class="right-text col-lg-6 col-md-12 col-sm-12 mobile-bottom-fix" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/facts.jpg" width="100%" height="600">
                    <br>
                    <img src="assets/images/fect.jpg" width="100%" height="600">
                </div>

            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Footer Start ***** -->
    <footer id="contact-us">
        <div class="container">
            <div class="footer-content">

                <div class="row" style="padding: 20px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15434.110461052085!2d121.01524567133245!3d14.739278829544887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b1a54790cde1%3A0x73895930fb447e67!2sBarangay%20168%2C%20Caloocan%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1617970786731!5m2!1sen!2sph" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="row">
                    <!-- ***** Contact Form Start ***** -->
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <form id="contact" method="post">
                                <div class="row">
                                    <?php if(isset($_GET['message'])) { ?>
                                      <div class="alert alert-danger"><?=urldecode(base64_decode($_GET['message']))?></div>
                                    <?php } ?>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="name" type="text" id="name" name="name" placeholder="Full Name" required=""
                                                style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" name="email" placeholder="E-Mail Address"
                                                required="" style="background-color: rgba(250,250,250,0.3);">
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <textarea name="message" rows="6" id="message" name="message" placeholder="Your Message"
                                                required="" style="background-color: rgba(250,250,250,0.3);"></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-lg-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" name="btnContact" class="main-button">Send Message
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- ***** Contact Form End ***** -->
                    <div class="right-content col-lg-6 col-md-12 col-sm-12">
                        <h2 style="margin-bottom: 0px;">Contact<em> Us</em></h2>
                        <ul class="social" style="margin-top: 0px;">
                            <br><br>
                            <li><a href="#"><i class="fa fa-map-marker"></i></a><p style="float: right; margin-left: 19px; "> Brgy.168, Deparo Rd, Caloocan City North, <br> Kalakhang Maynila</p></li><br><br>
                            <li><a href="#"><i class="fa fa-envelope-o"></i></a><p style="float: right; margin-left: 19px; margin-top: 10px;"> m.me/BrgyDeparo168 </p></li><br><br>
                            <li><a href="#"><i class="fa fa-phone"></i></a><p style="float: right; margin-left: 19px; margin-top: 10px;"> (02)936-59-03</p></li><br><br>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="sub-footer">
                        <p>This website is for school purpose.<br>
                            <strong>DOCUFINDER (Thesis Capstone)</strong><br>
                            A web responsive management and e-Blotter with <br>
                            tracking system using QR code solution for Barangay 168 Deparo.
                        </p>
                        <p>Copyright &copy; <?php echo date("Y"); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script><script  src="assets/js/member.js"></script>

    <!-- Auto pop up image -->
    <script src="assets/js/pop_up_img.js"></script>
    <script>
      jQuery('.modal').modal()
    </script>
</body>
</html>