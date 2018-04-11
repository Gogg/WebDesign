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

   </head>
   <body>

      <!-- Header -->
      <header class="header">
         <!-- Navigation -->
         <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top pt-3">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                     </a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                     </div>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
               </ul>
               <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
            </div>
         </nav>

         <!-- Progress bar -->
         <div class="progress fixed-top">
            <div class="progress-bar progress-bar-striped" id="myProgressBar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
         </div>
         <div class="header-overlay" id="Home">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <!-- logo -->
                     <div class="logo text-center mt-5 pt-5">
                        <img class="animated infinite bounce" src="images/notebook_scrap.png" alt="logo" title="this is the logo">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8">
                     <div class="header-text">
                        <!-- Title & Description-->
                        <h1> A clean and modern looking responsive website</h1>
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
                        <img class="animated bounce" src="images/notebook_scrap.png" alt="header iphone">
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
         <div class="features-inner-wrappera">
            <div class="container">
               <div class="row">
                  <!-- Left feature item 01-->
                  <div class="col-md-4 right-feature-item ">
                     <img class="animated bounce" src="images/notebook_scrap.png" alt="header iphone" style="height:100px;width:300px;">
                     <!-- Icon -->
                     <div class="left-feature-item-icon">
                        <i class="fa fa-desktop"></i>
                     </div>
                     <h3 class="card-title">The best support</h3>
                     <div class="card-body">

                        <!-- Feature item title and description -->

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                     </div>
                  </div>

                  <!-- Left feature item 02-->
                  <div class="col-md-4 right-feature-item ">
                     <img class="animated bounce" src="images/notebook_scrap.png" alt="header iphone" style="height:100px;width:300px;">
                     <div class="left-feature-item-icon">
                        <i class="fa fa-mobile"></i>
                     </div>
                     <!-- Feature item title and description -->
                     <h3>Mobile Ready</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                  </div>

                  <!-- Left feature item 03-->
                  <div class="col-md-4 right-feature-item ">
                     <img class="animated bounce" src="images/notebook_scrap.png" alt="header iphone" style="height:100px;width:300px;">
                     <div class="left-feature-item-icon">
                        <i class="fa fa-eye"></i>
                     </div>
                     <!-- Feature item title and description -->
                     <h3>Outstanding design</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                  </div>
                  <!--                  </div>-->
               </div>

               <div class="row">

                  <!-- right feature item 01 -->
                  <div class="col-md-4 right-feature-item ">
                     <img class="animated bounce" src="images/notebook_scrap.png" alt="header iphone" style="height:100px;width:300px;">
                     <!-- Icon -->
                     <div class="left-feature-item-icon">
                        <i class="fa fa-certificate"></i>
                     </div>
                     <!-- Feature item title and description -->
                     <h3>Certified Solution</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                  </div>
                  <!-- right feature item 02 -->
                  <div class="col-md-4 right-feature-item ">
                     <img class="animated bounce" src="images/notebook_scrap.png" alt="header iphone" style="height:100px;width:300px;">
                     <!-- Icon -->
                     <div class="left-feature-item-icon">
                        <i class="fa fa-rss"></i>
                     </div>
                     <!-- Feature item title and description -->
                     <h3>Powerful statistics</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                  </div>
                  <!-- right feature item 03 -->
                  <div class="col-md-4 right-feature-item ">
                     <img class="animated bounce" src="images/notebook_scrap.png" alt="header iphone" style="height:100px;width:300px;">
                     <!-- Icon -->
                     <div class="left-feature-item-icon">
                        <i class="fa fa-database"></i>
                     </div>
                     <!-- Feature item title and description -->
                     <h3>Secure Data</h3>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum ab, obcaecati sapiente iusto et consequuntur magnam.</p>
                  </div>
                  <!--                  </div>-->
               </div>
            </div>
         </div>
      </section>

      <!-- Contact Us -->
      <section id="Contact" class="contact-us" id="CONTACT">
         <div class="container animated bounceIn">
            <div class="row">
               <div class="col-md-12 col-md-offset-1">
                  <div class="section-title">
                     <h2>Contact Us</h2>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt repudiandae quibusdam est minima quam odit, odio, aliquam reiciendis ab velit recusandae facere quaerat saepe sed!.</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="contact-us-form animated bounceIn">
            <div class="container">
               <form action="" role="form">
                  <div class="row">
                     <div class="col-md-4">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                        <input type="email" class="form-control" id="email" placeholder="E-Mail">
                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                     </div>
                     <div class="col-md-8">
                        <textarea class="form-control" name="" id="message" cols="10" rows="15" placeholder="Message Text..."></textarea>
                        <button type="button" class="btn btn-default submit-btn form_submit">SEND</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-md-12 animated bounceInLeft">
                  <div class="social-icons">
                     <ul>
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-youtube"></a></li>
                     </ul>
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
                     <p>Copyright &copy; 2018 <a href="#"> - webDesign</a></p>
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
      <script src="js/app.js?v=2"></script> 
   </body>


</html>