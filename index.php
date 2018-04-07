<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>Site Design</title>

      <!--  Google Fonts-->
      <link href="https://fonts.googleapis.com/css?family=Raleway|Source+Sans+Pro" rel="stylesheet">

      <!-- fav icon-->
      <link rel="icon" type="image/png" href="images/favicon.png">  

      <!-- CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/animate.css">

      <!-- fontAwesome -->
      <link rel="stylesheet" href="css/fontawesome-free-5.0.9/web-fonts-with-css/css/fontawesome-all.min.css">
      <!--      <link rel="stylesheet" href="css/fontawesome-all.min.css">-->

   </head>
   <body>

      <!-- Header -->
      <header class="header">

         <!-- Navigation -->
         <nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top navbar-default mynavbarclass">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#loso-navbar-collapse-1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
               <!-- small size logo -->
               <img src="images/logo-small.png" alt="logo">

            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto navbar-right">
                  <li class="nav-item">
                     <a class="nav-link" href="#Home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#About">About</a>
                  </li>
                  <li class="nav-item">
                     <a href="#Features" class="nav-link" >Features</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#Screens">Screens</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#Download">Download</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#Contact">Contact</a>
                  </li>
               </ul>
            </div>
         </nav>

         <div class="header-overlay" id="Home">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!-- logo -->
                     <div class="logo text-center">
                        <img class="animated infinite bounce" src="images/logo.png" alt="logo" title="this is the logo">

                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8">
                     <div class="header-text">
                        <!-- Title & Description-->
                        <h1> A clean and modern looking responsice website</h1>
                        <p>Built with great love!</p>

                     </div>

                     <div class="header-btns">
                        <!-- Header buttons-->
                        <a class="btn btn-download" href="#">Download</a>
                        <a class="btn btn-tour" href="#"> Take a Tour
                           <i class="fa fa-angle-down"></i>
                        </a>

                     </div>
                  </div>

                  <div class="col-md-3 col-md-offset-1">
                     <div class="header-iphone">
                        <!--Header iPhone-->
                        <img class="animated bounce" src="images/iphone-header.png" alt="header iphone">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>

      <!-- Features -->
      <section id="Features" class="features" id="FEATURES">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-md-offset-1">
                  <div class="section-title animated fadeIn" data-wow-duration="1s">
                     <h2>Features</h2>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem nulla hic assumenda quibusdam, ullam debitis optio veniam, libero commodi totam labore maiores facere omnis non sequi similique perspiciatis vitae laborum.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="features-inner-wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 animated fadeInLeft" data-wow-duration="1s">

                     <!-- Left feature item 01-->
                     <div class="left-feature-item card">
                        <!-- Icon -->
                        <div class="left-feature-item-icon">
                           <i class="fa fa-desktop"></i>
                        </div>
                        <h3 class="card-title">Retina Ready</h3>
                        <div class="card-body">

                           <!-- Feature item title and description -->
                           
                           <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                        </div>
                     </div>

                     <!-- Left feature item 02-->
                     <div class="left-feature-item card">
                        <div class="left-feature-item-icon">
                           <i class="fa fa-mobile"></i>
                        </div>
                        <!-- Feature item title and description -->
                        <h3>Mobile Ready</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                     </div>

                     <!-- Left feature item 03-->
                     <div class="left-feature-item card">
                        <div class="left-feature-item-icon">
                           <i class="fa fa-eye"></i>
                        </div>
                        <!-- Feature item title and description -->
                        <h3>Easy Layout</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                     </div>
                  </div>
                  <!--
<div class="col-md-4">
<div class="feature-iphone">
<img class="img-responsive" src="images/iphone-02.png" alt="iPhone" class="animated bounceIn" data-wow-duration="1s">
</div>
</div>
-->
                  <div class="col-md-6 animated fadeInRight " data-wow-duration="1s">

                     <!-- right feature item 01 -->
                     <div class="right-feature-item card">
                        <!-- Icon -->
                        <div class="right-feature-item-icon">
                           <i class="fa fa-certificate"></i>
                        </div>
                        <!-- Feature item title and description -->
                        <h3>Certified Solution</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                     </div>
                     <!-- right feature item 02 -->
                     <div class="right-feature-item card">
                        <!-- Icon -->
                        <div class="right-feature-item-icon">
                           <i class="fa fa-rss"></i>
                        </div>
                        <!-- Feature item title and description -->
                        <h3>Constant Feed</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                     </div>
                     <!-- right feature item 03 -->
                     <div class="right-feature-item card">
                        <!-- Icon -->
                        <div class="right-feature-item-icon">
                           <i class="fa fa-database"></i>
                        </div>
                        <!-- Feature item title and description -->
                        <h3>Secure Data</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>


      <!-- Footer -->
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="copyright">
                     <p>Copyright &copy; 2018 <a href="#"> - LoSo</a></p>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="scroll-top">
                     <a href="#Home" id="scroll-to-top">
                        <i class="fas fa-angle-up"></i></a>
                  </div>
               </div>
            </div>
         </div>
      </footer>

      <!-- jQuery-->
      <script src="js/jquery-3.3.1.min.js"></script>

      <!-- Bootstrap JavaScript-->
      <script src="js/bootstrap/bootstrap.min.js"></script>

      <!-- Custom JavaScript-->
      <!--<script src="js/custom.js"></script> -->
   </body>


</html>