<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Madrasah Diniyah</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="template/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="template/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="template/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="template/template/images/fevicon.png" type="template/image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="template/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="template/images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.html"><img src="template/images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                                <li class="nav-item active">
                                 <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Services</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
               <li data-target="#banner1" data-slide-to="3"></li>
               <li data-target="#banner1" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                              <h1>Ayo Daftar <br> Madrasah</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="template/images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Ayo Daftar <br> Madrasah</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="template/images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                              <h1>Ayo Daftar <br> Madrasah</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="template/images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                              <h1>Ayo Daftar <br> Madrasah</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="template/images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                              <h1>Ayo Daftar <br> Madrasah</h1>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                 <a href="#">About More </a>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                    <img src="template/images/pct.png" alt="#"/>
                                    <h3>01</h3>
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- team -->
      <div class="team">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="team_img">
                     <figure><img src="template/images/sco.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="titlepage">
                     <h2>We Are A Dynamic Team Of Seo Agency</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod enim tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                     <h3>PROJECTS COMPLETED</h3>
                     <strong>1165 <span class="yellow">+</span></strong>
                     <a class="read_more" href="#"> Read More</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- team -->
         <!-- services -->
         <div  class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <h2>Build Your Website, Let's Check Our Services</h2>
                        <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div id="serv_hover"  class="services_box">
                        <i><img src="template/images/service1.png" alt="#"/></i>
                        <h3>Web Design</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="template/images/service2.png" alt="#"/></i>
                        <h3>Data Analysis</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="template/images/service3.png" alt="#"/></i>
                        <h3>Marketing Analysis</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end services -->
         <!-- New Ideas  section -->
         <div class="ideas">
            <div class="container">
               <div class="row">
                  <div class="col-md-10">
                     <div class="titlepage">
                        <h2> New Ideas & Bold Moves</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                     </div>
                  </div>
               </div>
               <div class="border_trbl">
                  <div class="row">
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>80%</h3>
                           <p>Email Marketing</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>70%</h3>
                           <p>Online Marketing</p>
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="ideas_box">
                           <h3>60%</h3>
                           <p>Enterprise Marketing</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end New Ideas  section -->
      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                     <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="test_box margin_bottom">
                     <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                     <div class="test_icon">
                        <i><img src="template/images/cos.png" alt="#"/></i>
                        <h4>Joans Mark <br> <span class="yellow">Call</span></h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="test_box">
                     <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                     <div class="test_icon">
                        <i><img src="template/images/cos.png" alt="#"/></i>
                        <h4>Joans Mark <br> <span class="yellow">Call</span></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      <!--  contact -->
      <div class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Request A Call Back</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus1" placeholder="Message" type="type" Message="Name">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map">
                     <figure><img src="template/images/map_img.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <img class="logo1" src="template/images/logo1.png" alt="#"/>
                     <ul class="about_us">
                        <li>dolor sit amet, consectetur<br> magna aliqua. Ut enim ad <br>minim veniam, <br> quisdotempor incididunt r</li>
                     </ul>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Useful Link</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>The Services</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <h3>Contact Us</h3>
                     <ul class="link_menu">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About services</a></li>
                        <li><a href="#">About Departments</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-8 offset-md-4 ">
                     <form class="bottom_form">
                        <h3>Newsletter</h3>
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="template/js/jquery.min.js"></script>
      <script src="template/js/popper.min.js"></script>
      <script src="template/js/bootstrap.bundle.min.js"></script>
      <script src="template/js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="template/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="template/js/custom.js"></script>
   </body>
</html>

