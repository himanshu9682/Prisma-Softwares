<?php

$insert = false;

if (isset($_POST['name'])) {

  $sever = "localhost";
  $username = "root";
  $password = "";

  $con = mysqli_connect($sever, $username, $password);

  if (!$con) {
    die("Connection to this database failed due to" . mysqli_connect_error());
  }
  // echo "Success connected to DataBase";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $msg = $_POST['msg'];

  $sql = "INSERT INTO `prisma`.`prisma` (`name`, `email`, `phone`, `msg`, `dt`) VALUES ('$name', '$email', '$phone', '$msg', current_timestamp());";
  // echo $sql;

  if ($con->query($sql) == true) {
    // echo "Succesfully Inserted";
    $insert = true;
  } else {
    echo "ERROR: $sql <br> $con->error";
  }

  $con->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

  <title>Prisma Software</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/templatemo-chain-app-dev.css">
  <link rel="stylesheet" href="assets/css/animated.css">
  <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.php" class="logo">
              <img src="assets/images/LOGO_WEB.png" alt="Graphicbyhim Logo" height="70px" width="15px">
            </a>
            <!-- ***** Logo End ***** -->

            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li class="scroll-to-section"><a href="index.php" class="active">Home</a></li>
              <li class="scroll-to-section"><a href="#services">Services</a></li>
              <li class="scroll-to-section"><a href="#about">About</a></li>
              <li class="scroll-to-section"><a href="sample.html" target="_main">Portfolio</a></li>
              <li class="scroll-to-section"><a href="#">instagram</a></li>
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

  <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content show-up header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                <div class="row">
                  <div class="col-lg-12">
                    <h2>Prisma Softwares</h2>
                    <p>Web & App Developer.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="assets/images/slider-dec.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="services section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
            <h4>Amazing <em>Services &amp; Features</em> for you</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>If you need a Premium WebSite for your business, please visit <a rel="nofollow" href="https:// " target="_blank">Prisma Software</a> Blog. If you need to have a contact form PHP script,
              go to <a href="https://" target="_parent">our contact page</a> for more information.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="service-item first-service">
            <div class="icon"></div>
            <h4>Website Maintenance</h4>
            <p><b> Website Maintainence Services with 100% Website Care and Support.</b><br>Let our experts take care of your website so that you can focus on your Business.</p>
            <div class="text-button">
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item second-service">
            <div class="icon"></div>
            <h4>Rocket Speed of Page</h4>
            <p>Our intensive maintenance checklist ensures your website
              performs at its best. All the performance monitering
              activities are under the Obsrevation of our experts.
            </p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item third-service">
            <div class="icon"></div>
            <h4>Multi Workflow Idea</h4>
            <p>We make sure that you are getting what you pay for and
              that you are satisfied withthe service we provide.
              We also make sure that you are kept updated.
          </div>
        </div>
        <div class="col-lg-3">
          <div class="service-item fourth-service">
            <div class="icon"></div>
            <h4>24/7 Help &amp; Support</h4>
            <p>Our support team connects through calls or email as required.
              Through all mediums, We ensure that the Bug will fixed/resolved
              in 24-48 hours. </p>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div id="about" class="about-us section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="section-heading">
            <h4>About <em>What We Do</em> &amp; Who We Are</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
            <p>Prisma Softwares is a web designing and web maintennance agency
              based in Varanasi, Uttar Pradesh, India. We deliver aur service
              cost-effectively within time constraints.
            </p>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Website Making</a></h4>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">24/7 Support &amp; Help</a></h4>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Fixing Issues About</a></h4>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="box-item">
                <h4><a href="#">Co. Development</a></h4>
              </div>
            </div>
            <div class="col-lg-12">
              <p>We crete, as well as recreate Website for small, Medium and Large enterprises.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="right-image">
            <img src="assets/images/about-right-dec.png" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="clients" class="the-clients">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="section-heading">
            <h4>Check What <em>The Clients Say</em> About Our App Dev</h4>
            <img src="assets/images/heading-line-dec.png" alt="">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="naccs">
            <div class="grid">
              <div class="row">
                <div class="col-lg-7 align-self-center">
                  <div class="menu">
                    <div class="first-thumb active">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Ayush Srivastava</h4>
                            <span class="date">2 Years Ago.</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Financial Apps</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">5</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Interactive Physics</h4>
                            <span class="date">2 Years Ago</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Web Design</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">5</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Gaurav Sarraf</h4>
                            <span class="date">1 Years Ago</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Business &amp; Economics</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">5</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Rishabh Srivastava</h4>
                            <span class="date">1 Year Ago</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">New App Ecosystem</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">5</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="last-thumb">
                      <div class="thumb">
                        <div class="row">
                          <div class="col-lg-4 col-sm-4 col-12">
                            <h4>Vishal Verma</h4>
                            <span class="date">Few Months Ago</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 d-none d-sm-block">
                            <span class="category">Web Development</span>
                          </div>
                          <div class="col-lg-4 col-sm-4 col-12">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <span class="rating">5</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-5">
                  <ul class="nacc">
                    <li class="active">
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Professionalism”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image-1.png" alt="">
                                <div class="right-content">
                                  <h4>Ayush Srivastava</h4>
                                  <span>--Unknown--</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“ Professionalism, Quality, Responsiveness, Value ”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image-2.png" alt="">
                                <div class="right-content">
                                  <h4>Nilesh Pandey</h4>
                                  <span>Founder- Quantum Academy</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Responsiveness, Value”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image-3.png" alt="">
                                <div class="right-content">
                                  <h4>Gaurav Sarraf</h4>
                                  <span>Owner- G.D. Jwellers</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Professionalism, Quality, Responsiveness, Value”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image-4.png" alt="">
                                <div class="right-content">
                                  <h4>Rishabh Srivastava/h4>
                                    <span>--Unknown--</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div>
                        <div class="thumb">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="client-content">
                                <img src="assets/images/quote.png" alt="">
                                <p>“Absolutely nice and creative works..........”</p>
                              </div>
                              <div class="down-content">
                                <img src="assets/images/client-image-5.png" alt="">
                                <div class="right-content">
                                  <h4>Vishal Verma</h4>
                                  <span>--Unknown--</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact  section -->
  <div id="contact" class="contact ">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="titlepage">
            <h2><strong class="yellow">Contact us</strong><br>Request a call back</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <form id="post_form" class="contact_form" action="index.php" method="post">
            <div class="row">
              <div class="col-md-12 ">
                <input class="contact_control" name="name" id="name" placeholder=" Name" type="text" name="Name" required />
              </div>
              <div class="col-md-12">
                <input class="contact_control" name="email" id="email" placeholder="Email" type="email" name="Email" required />
              </div>
              <div class="col-md-12">
                <input class="contact_control" name="phone" id="phone" placeholder="Phone Number " type="phone" name="Phone Number " required />
              </div>
              <div class="col-md-12">
                <textarea class="textarea" name="msg" id="msg" placeholder="Message"></textarea>
              </div>
              <div class="col-md-12">
                <button class="send_btn">Send</button>
              </div>
          </form>
        </div>
        <?php
        if ($insert == true) {
          echo "<br><p style='color:green; text-align:center;'>Thanks For Your Visit Our Executives Will Contact You Soon..</p>";
        }
        ?>
      </div>
    </div>
  </div>
  </div>
  <!-- end contact  section -->

  <footer id="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">

        </div>
        <div class="col-lg-6 offset-lg-3">
          <form id="search" action="#" method="GET">
            <div class="row">

              <div class="col-lg-6 col-sm-6">

              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>Contact Us</h4>
            <p>Varanasi</p>
            <p><a href="#">+91-7348077868</a></p>
            <p><a href="#">prismasoft.business@gmail.com</a></p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Us</h4>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#clients">Testimonials</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <h4>About Our Company</h4>
            <p>Prisma Softwares is a web designing and web maintennance agency based in Varanasi,
              Uttar Pradesh, India. We deliver aur service cost-effectively within time constraints.</p>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="footer-widget">
            <img src="assets/images/LOGO_PNG.png" alt="">
          </div>
        </div>
        <div class="col-lg-12">
          <div class="copyright-text">
            <p>Copyright © 2022 Prisma Softwares. All Rights Reserved.
              <br>Design: <a href="https://www.instagram.com/himanshu_verma21/" target="_blank" title="Developer/Owner">Himanshu Verma</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>
</body>

</html>
